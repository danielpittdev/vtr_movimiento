// ===== Helpers de UI (no exponen datos sensibles) =====
function showAlert(alertBox) {
	if (!alertBox) return;
	alertBox.classList.remove('hidden', 'opacity-0', 'scale-95', 'pointer-events-none');
	alertBox.classList.add('opacity-100', 'scale-100');
}
function hideAlert(alertBox) {
	if (!alertBox) return;
	alertBox.classList.add('hidden', 'opacity-0', 'scale-95', 'pointer-events-none');
	alertBox.classList.remove('opacity-100', 'scale-100');
}
function safeText(x, max = 300) {
	const s = (typeof x === 'string' ? x : '').replace(/[<>]/g, '');
	return s.length > max ? s.slice(0, max) + '…' : s;
}
function setFieldError(input, msg) {
	if (!input) return;
	input.classList.add('input-error', 'ring-1', 'ring-red-500', 'border-red-500');
	const p = document.createElement('p');
	p.className = 'error-text mt-1 text-sm text-red-600';
	p.textContent = safeText(msg || 'Campo inválido');
	input.insertAdjacentElement('afterend', p);
}
function getCsrf() {
	return document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || null;
}

// ===== Mapeo de mensajes públicos por status =====
const PUBLIC_MESSAGES = {
	400: 'Solicitud inválida.',
	401: 'Necesitas iniciar sesión.',
	403: 'No tienes permisos para esta acción.',
	404: 'Recurso no encontrado.',
	409: 'Conflicto en la solicitud.',
	419: 'Sesión caducada. Recarga la página e inténtalo de nuevo.',
	422: 'Revisa los campos.',
	429: 'Demasiadas peticiones. Prueba en un momento.',
	500: 'Error interno. Vuelve a intentarlo en breve.',
	502: 'Servicio temporalmente no disponible.',
	503: 'Servicio en mantenimiento.',
	504: 'Tiempo de espera agotado en el servidor.',
	DEFAULT: 'Ha ocurrido un problema. Inténtalo de nuevo más tarde.',
};

// ===== Core universal =====
/**
 * senderAjax(form, { timeoutMs, onSuccess, onError })
 * - Muestra errores de validación campo a campo (422)
 * - No filtra datos sensibles en mensajes globales
 * - Soporta timeouts y fallos de red
 */
async function senderAjax(formulario, opts = {}) {
	const form = typeof formulario === 'string' ? document.querySelector(formulario) : formulario;
	if (!form) throw new Error('Formulario no encontrado');

	const { timeoutMs = 20000, onSuccess = null, onError = null } = opts;

	const btn = form.querySelector('button[type="submit"]');
	const formData = new FormData(form);

	// Alerta global (fuera del form)
	const alertBox = document.querySelector('.alerta') || null;
	const msgBox = alertBox?.querySelector('.mensaje_alerta') || null;
	const listBox = alertBox?.querySelector('.lista_errores') || null;

	// Reset UI antes de enviar
	form.querySelectorAll('.input-error').forEach(el => el.classList.remove('input-error', 'ring-1', 'ring-red-500', 'border-red-500'));
	form.querySelectorAll('.error-text').forEach(el => el.remove());
	hideAlert(alertBox);
	if (msgBox) msgBox.textContent = '';
	if (listBox) listBox.innerHTML = '';
	btn?.setAttribute('disabled', 'true');

	// AbortController para timeout
	const ac = new AbortController();
	const tId = setTimeout(() => ac.abort('timeout'), timeoutMs);

	// Headers seguros
	const headers = {
		'X-Requested-With': 'XMLHttpRequest',
		'Accept': 'application/json'
	};
	const csrf = getCsrf();
	if (csrf) headers['X-CSRF-TOKEN'] = csrf;

	try {
		const res = await fetch(form.action, {
			method: 'POST',
			body: formData,
			headers,
			credentials: 'same-origin',
			signal: ac.signal,
		});

		// Intento de parseo prudente
		const ct = res.headers.get('content-type') || '';
		let data = null;
		if (ct.includes('application/json')) {
			try { data = await res.json(); } catch { data = null; }
		} else {
			// No JSON: evita exponer HTML/stack, pero guarda texto por si hace falta log
			try { data = { raw: await res.text() }; } catch { data = null; }
		}

		const serverMsg = (data && (data.message || data.mensaje)) ? String(data.message || data.mensaje) : null;

		// Errores HTTP
		if (!res.ok) {
			const status = res.status || 0;

			// 422 Validación detallada
			if (status === 422 && data?.errors && typeof data.errors === 'object') {
				Object.entries(data.errors).forEach(([campo, mensajes]) => {
					const input = form.querySelector(`[name="${campo}"]`);
					const msg = Array.isArray(mensajes) ? mensajes[0] : mensajes;
					setFieldError(input, msg);
				});
				if (msgBox) msgBox.textContent = safeText(serverMsg || PUBLIC_MESSAGES[422]);
				if (listBox && data?.errors) {
					Object.values(data.errors).flat().slice(0, 10).forEach(m => {
						const li = document.createElement('li');
						li.textContent = safeText(m);
						listBox.appendChild(li);
					});
				}
				showAlert(alertBox);
			} else {
				// Otros códigos: mensaje público + opcional del servidor si es inocuo
				const publicMsg = PUBLIC_MESSAGES[status] || PUBLIC_MESSAGES.DEFAULT;
				if (msgBox) msgBox.textContent = safeText(serverMsg || publicMsg);
				showAlert(alertBox);
			}

			const err = { status: res.status, ok: false, data };
			onError?.(err);
			throw err; // Propaga si el caller quiere capturar
		}

		// ÉXITO
		hideAlert(alertBox);
		onSuccess?.(data);
		return data || {};
	} catch (e) {
		// Timeout o fallo de red
		const isAbort = e?.name === 'AbortError' || e === 'timeout';
		const publicMsg = isAbort
			? 'Se agotó el tiempo de espera. Revisa tu conexión e inténtalo de nuevo.'
			: 'No hay conexión o el servidor no responde. Prueba de nuevo.';

		if (msgBox) {
			msgBox.textContent = publicMsg;
			showAlert(alertBox);
		} else {
			console.warn('sende·#ƒqrAjax fallo:', e);
		}

		onError?.(e);
		throw e;
	} finally {
		clearTimeout(tId);
		btn?.removeAttribute('disabled');
	}
}

// Exponer global
window.senderAjax = senderAjax;
