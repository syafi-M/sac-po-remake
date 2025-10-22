<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Hubungi kami untuk konsultasi layanan outsourcing, pelatihan, atau informasi lainnya. Temukan lokasi dan kontak PT Surya Amanah Cendikia di Ponorogo." />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <title>Kontak Kami - PT. Surya Amanah Cendekia</title>
</head>
<body class="min-w-full min-h-screen ">
    <div>
        <x-navbar />
    </div>
    <div class="mx-5 mt-20 md:mt-28 md:mx-10">

        <div class="space-y-5">
            <div class="mx-5 md:mx-10 mt-28 ">
                <p class="text-sm font-semibold text-center md:text-base"><i class="font-semibold ri-subtract-line text-amber-500"></i><i class="font-semibold ri-subtract-line text-amber-500"></i> Kontak <i class="font-semibold ri-subtract-line text-amber-500"></i><i class="font-semibold ri-subtract-line text-amber-500"></i></p>
            </div>
            <div class="flex flex-col items-center justify-center gap-2">
                <p class="text-lg font-bold text-center md:text-2xl">Kontak Kami</p>
                <div class="bg-gray-100 rounded-md drop-shadow-md">
                    <div class="flex flex-col gap-1 p-2 mt-5 font-semibold md:mt-0">
                        <p class="text-center">Follow us</p>
                        <div class="flex flex-col gap-2">
                            <p class="mt-2 font-bold">Instagram: </p>
                            <a href="https://www.instagram.com/ptsacponorogo/" class="flex items-center gap-2">
                                <p><i class="p-1 text-xl font-medium bg-white rounded-full ri-instagram-line text-zinc-700"></i></p>
                                <p> @ptsacponorogo</p>
                            </a>
                            <p class="mt-2 font-bold">WhatsApp / HP: </p>
                            <a href="https://wa.me/6282134360007" class="flex items-center gap-2">
                                <p class="p-1 px-2 text-xl font-medium bg-white rounded-full text-zinc-700"><i class="ri-phone-line "></i> / <i class="ri-whatsapp-line"></i></p>
                                <p> +62 821-3436-0007</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <x-footer/>
    </div>
</body>
</html>
