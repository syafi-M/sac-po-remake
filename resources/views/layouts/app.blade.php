<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>PT. Surya Amanah Cendikia Ponorogo – Penyedia Outsourcing & Pengembangan SDM Profesional</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5252551755919202"
     crossorigin="anonymous"></script>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <x-navbar></x-navbar>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script>
        $('#img').change(function() {
				const input = $(this)[0];
				const preview = $('.preview');

				if (input.files && input.files[0]) {
					const reader = new FileReader();

					reader.onload = function(e) {
						preview.show();
						preview.find('img').attr('src', e.target.result);
						preview.removeClass('hidden');
						preview.find('img').addClass('rounded-md shadow-md my-4');
					};

					reader.readAsDataURL(input.files[0]);
				}
        })
    </script>
    </body>
</html>
