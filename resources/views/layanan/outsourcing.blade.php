<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Kami menawarkan layanan outsourcing tenaga kerja, pelatihan keterampilan, dan pendampingan SDM berkualitas di wilayah Ponorogo dan sekitarnya." />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <title>Layanan Outsourcing Kami - PT. Surya Amanah Cendikia Ponorogo</title>
</head>
<body class=" min-w-full min-h-screen">
    <div>
        <x-navbar />
    </div>
    <div class="mt-28 mx-5 md:mx-10">
        
        <div class="space-y-10">
            <div class="mx-5 md:mx-10 mt-10 ">
                <p class="text-sm text-center md:text-base font-semibold"><i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i> Layanan Outsourcing <i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div class="flex flex-col items-center gap-2 justify-center">
                <p class="text-center font-bold text-lg md:text-2xl">Layanan Outsourcing Kami</p>
            </div>
            <div class="flex flex-col items-center gap-2 justify-center">
                <p class="text-center font-bold text-lg md:text-2xl">Cleaning Service</p>
                <div class="gap-4  max-w-4xl items-center grid md:grid-cols-2 grid-cols-1 justify-center">
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="w-full flex justify-center">
                            <img src="{{ asset('image/csrutin'. $i .'.jpg') }}" class="object-cover object-center md:w-[50svw] md:h-[35svh]" alt="img{{ $i }}" srcset="">
                        </div>
                    @endfor
                </div>
            </div>
            <div class="flex flex-col items-center gap-2 justify-center">
                <p class="text-center font-bold text-lg md:text-2xl">Security</p>
                <div class="gap-4  max-w-4xl items-center grid md:grid-cols-2 grid-cols-1 justify-center">
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="w-full flex justify-center">
                            <img src="{{ asset('image/scrrutin'. $i .'.jpg') }}" class="object-cover object-center md:w-[50svw] md:h-[35svh]" alt="img{{ $i }}" srcset="">
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <x-footer/>
    </div>
</body>
</html>