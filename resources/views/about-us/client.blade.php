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
    <div class="mt-28 mx-5 md:mx-10">
        <div class="aspect-[21/9] md:aspect-auto drop-shadow-md flex justify-center">
            <img src="{{ asset('image/map.png') }}" class="object-cover object-center w-[95svw] md:w-[70svw] h-auto block rounded-md bg-gradient-to-bl from-stone-700 via-stone-600 to-stone-500" alt="" srcset="">
        </div>
        <div class="space-y-10">
            <div class="mx-5 md:mx-10 mt-10 ">
                <p class="text-sm text-center  md:text-base font-semibold"><i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i> Klien Kami <i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div class="flex flex-col items-center gap-2 justify-center">
                <p class="text-center font-bold text-lg md:text-2xl">Semua Klien Kami</p>
                <div class="gap-4  max-w-4xl grid md:grid-cols-5 grid-cols-3 justify-center">
                    @forelse ($client as $i => $item)
                        <div class="w-full flex flex-col items-center justify-between">
                            <img src="{{ asset('storage/images/'.$item->img) }}" width="100" alt="img{{ $i }}" srcset="">
                            <p class="text-center font-semibold text-xs py-1 sm:text-sm">{{ $item->name }}</p>
                        </div>
                        
                    @empty
                        
                    @endforelse
                    
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <x-footer/>
    </div>
</body>
</html>