// FORMULARIOS COMPLETOS

// En formulario: action:nombre.ruta - method:post - id:id_formulario
const form = document.querySelector('#login');

form?.addEventListener('submit', (e) => {
	e.preventDefault();
	senderAjax(form)
		.then(data => {
			console.log('✅ Login OK', data);
			if (data.redirect) window.location.href = data.redirect;
		})
});