@extends('general.html.panel')

@section('contenido')
	<div class="grid gap-5 max-w-lg">
		<section class="box">
			<form action="{{ route('actualizar_usuario') }}" id="actualizar_usuario" method="post">
				@csrf
				<div class="space-y-12 card">
					<section>
						<div class="caja mb-6">
							<h2 class="text-base/7 font-semibold">Ajustes del usuario</h2>
							<p class="mt-1 text-sm/6 text-base-content/50">Cambia tu información de usuario.</p>
						</div>

						<div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-6">
							<div class="col-span-full">
								<fieldset>
									<div class="img-group size-17 ring ring-base-content/20 rounded-full overflow-hidden">
										<label for="avatar">
											<img src="@if (auth()->user()->avatar) {{ Storage::url(auth()->user()->avatar) }} @else /media/avatar.png @endif" class="w-full h-full preview p-0 hover:p-[1px] duration-200 rounded-full object-cover cursor-pointer">
										</label>
										<input autocomplete="off" type="file" name="avatar" id="avatar" accept="image/*" class="hidden">
									</div>
								</fieldset>
							</div>

							<div class="sm:col-span-4">
								<fieldset>
									<div class="sm:col-span-4">
										<label for="nombre_usuario" class="block text-sm/6 font-medium">Nombre de usuario</label>
										<div class="mt-2">
											<input autocomplete="off" type="text" name="nombre_usuario" id="nombre_usuario" value="{{ auth()->user()->nombre_usuario }}" autocomplete="given-name" class="w-full placeholder:text-base-content/50 bg-[--color-input]" />
										</div>
									</div>
								</fieldset>
							</div>

							<div class="sm:col-span-4">
								<label for="nombre" class="block text-sm/6 font-medium">Nombre</label>
								<div class="mt-2">
									<input autocomplete="off" value="{{ auth()->user()->nombre }}" type="text" name="nombre" id="nombre" autocomplete="given-name" class="w-full placeholder:text-base-content/50 bg-[--color-input]" />
								</div>
							</div>

							<div class="sm:col-span-3">
								<label for="apellido_1" class="block text-sm/6 font-medium">Primer apellido</label>
								<div class="mt-2">
									<input autocomplete="off" value="{{ auth()->user()->apellido_1 }}" type="text" name="apellido_1" id="apellido_1" autocomplete="family-name" class="w-full placeholder:text-base-content/50 bg-[--color-input]" />
								</div>
							</div>

							<div class="sm:col-span-3">
								<label for="apellido_2" class="block text-sm/6 font-medium">Segundo apellido</label>
								<div class="mt-2">
									<input autocomplete="off" value="{{ auth()->user()->apellido_2 }}" type="text" name="apellido_2" id="apellido_2" autocomplete="family-name" class="w-full placeholder:text-base-content/50 bg-[--color-input]" />
								</div>
							</div>

							<div class="sm:col-span-4">
								<label for="correo" class="block text-sm/6 font-medium">Correo electrónico</label>
								<div class="mt-2">
									<input autocomplete="off" value="{{ auth()->user()->correo }}" id="correo" name="correo" type="email" class="w-full placeholder:text-base-content/50 bg-[--color-input]" />
								</div>
							</div>
						</div>
					</section>

					<div class="flex items-center justify-start gap-x-6">
						<button type="submit" class="btn btn-md btn-primary">Actualizar</button>
					</div>
				</div>
			</form>
		</section>

		<section class="box">
			<form action="{{ route('actualizar_usuario') }}" id="actualizar_password" method="post">
				@csrf
				<div class="space-y-12">
					<div class="space-y-7 card">
						<div class="space">
							<h2 class="text-base/7 font-semibold">Cambiar contraseña</h2>
							<p class="mt-1 text-sm/6 text-base-content/50">Cambia tu contraseña de usuario.</p>
						</div>

						<div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
							<div class="sm:col-span-6">
								<label for="password_actual" class="block text-sm/6 font-medium">Contraseña actual</label>
								<div class="mt-2">
									<input autocomplete="off" type="password" name="password_actual" id="password_actual" autocomplete="given-name" class="w-full placeholder:text-base-content/50 bg-[--color-input]" />
								</div>
							</div>

							<div class="sm:col-span-3">
								<label for="password" class="block text-sm/6 font-medium">Nueva contraseña</label>
								<div class="mt-2">
									<input autocomplete="off" type="password" name="password" id="password" autocomplete="given-name" class="w-full placeholder:text-base-content/50 bg-[--color-input]" />
								</div>
							</div>

							<div class="sm:col-span-3">
								<label for="password_confirmation" class="block text-sm/6 font-medium">Repetir contraseña</label>
								<div class="mt-2">
									<input autocomplete="off" type="password" name="password_confirmation" id="password_confirmation" autocomplete="given-name" class="w-full placeholder:text-base-content/50 bg-[--color-input]" />
								</div>
							</div>
						</div>

						<div class="mt-5 flex items-center justify-start gap-x-6">
							<button type="submit" class="btn btn-md btn-primary">Actualizar</button>
						</div>
					</div>
				</div>
			</form>
		</section>

		<section class="box">
			<a href="{{ route('cerrar_sesion') }}">
				<button class="btn btn-sm btn-error">
					Cerrar sesión
				</button>
			</a>
		</section>
	</div>
@endsection

@section('scripts')
	<script>
		const actualizar_usuario = document.querySelector('#actualizar_usuario');

		actualizar_usuario?.addEventListener('submit', (e) => {
			e.preventDefault();
			senderAjax(actualizar_usuario)
				.then(data => {
					console.log('✅ Login OK', data);
				})
		});

		const actualizar_password = document.querySelector('#actualizar_password');

		actualizar_password?.addEventListener('submit', (e) => {
			e.preventDefault();
			senderAjax(actualizar_password)
				.then(data => {
					console.log('✅ Login OK', data);
				})
		});
	</script>
@endsection
