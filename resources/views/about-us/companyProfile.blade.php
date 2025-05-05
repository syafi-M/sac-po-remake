<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <title>Sac-po.com</title>
</head>
<body class=" min-w-full min-h-screen">
    <div>
        <x-navbar />
    </div>
    <div class="mt-20 mx-5 md:mx-10">
        <div class="space-y-5">
            <div class="mx-5 md:mx-10 mt-28 ">
                <p class="text-sm text-center md:text-base font-semibold"><i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i> Company Profile <i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div class="flex flex-col items-center gap-2 justify-center">
                <p class="text-center font-bold text-lg md:text-2xl">Company Profile Kami</p>
                <!--<video controls autoplay loop dragable="false" class="aspect-video w-[90svw] sm:w-[50svw] rounded-md drop-shadow-md">-->
                <!--    <source src="https://drive.google.com/uc?export=download&id=1tYJratNjnPFNFo7w0DJx7QVkak1Y1LGN">-->
                <!--</video>-->
                <iframe 
                    src="https://drive.google.com/file/d/1tYJratNjnPFNFo7w0DJx7QVkak1Y1LGN/preview" 
                    autoplay="1"
                    class="aspect-video w-[90svw] sm:w-[50svw] rounded-md drop-shadow-md">
                </iframe>

            </div>
        </div>
    </div>
    <div class="mt-10">
        <x-footer/>
    </div>
</body>
</html>