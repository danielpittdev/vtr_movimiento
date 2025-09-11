<!DOCTYPE html>
<html lang="en" data-theme="darky" class="bg-base-200/50 transition-all duration-300 h-full">

	<head>
		<meta name="theme-color" content="{{ request()->cookie('theme', '#1b2025') }}" id="theme-color-meta-v2" />

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Panel</title>

		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="manifest" href="/laravelpwa/manifest.json">
		<script>
			if ('serviceWorker' in navigator) {
				navigator.serviceWorker.register('/laravelpwa/serviceworker.js')
					.then(function() {
						console.log("PWA service worker registered");
					});
			}
		</script>

		@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/socket.js', 'resources/js/form.js'])
	</head>

	<body class="h-full group @if (request()->cookie('sidebar_estado') === 'plegado') sidebar-plegado @endif">
		<div class="h-full">
			@include('general.fragmentos.aside')

			<div class="intra_main lg:pl-65 group-[.sidebar-plegado]:lg:pl-17 transition-all duration-500 h-full">
				<main class="h-full grid grid-rows-[auto_1fr] relative">
					@include('general.fragmentos.nav')

					<section class="sm:p-6 p-5 h-full border-base-content/7 overflow-auto">
						@yield('contenido')
						@yield('modales')
						@yield('scripts')
					</section>
				</main>
			</div>
		</div>
	</body>

</html>
