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
    <meta name="description" content="{{ $artikel->desc }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <title>{{ $artikel->title }} - PT. Surya Amanah Cendikia</title>
</head>
<body class=" min-w-full min-h-screen">
    <div>
        <x-navbar />
    </div>
    <div class="mt-28 mx-5 md:mx-10">
        
        <div class="space-y-5">
            <div class="flex flex-col items-center gap-2 justify-center">
                <p class="text-center font-bold text-lg md:text-2xl">{{ $artikel->title }}</p>
                <div>
                    <img src="{{ asset('storage/images/'.$artikel->img) }}" width="450" alt="{{ $artikel->title }}" class="rounded-md">
                </div>
                @if($artikel->addon_img)
                    <div>
                        @foreach($artikel->addon_img as $add)
                        <div>
                            <img src="{{ asset('storage/images/'.$add) }}" width="450" alt="{{ $add }}">
                        </div>
                        @endforeach
                    </div>
                @endif
                <div>
                    <div class=" text-sm leading-7 md:text-base md:mx-20">{!! $artikel->desc !!}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <x-footer/>
    </div>
</body>
</html>