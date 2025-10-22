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
    <title>Company Profile - PT. Surya Amanah Cendekia</title>
</head>
<body class="min-w-full min-h-screen ">
    <div>
        <x-navbar />
    </div>
    <div class="mx-5 mt-20 md:mt-28 md:mx-10">
        <div class="space-y-5">
            <div class="mx-5 mt-20 md:mx-10 ">
                <p class="text-sm font-semibold text-center md:text-base"><i class="font-semibold ri-subtract-line text-amber-500"></i><i class="font-semibold ri-subtract-line text-amber-500"></i> Company Profile <i class="font-semibold ri-subtract-line text-amber-500"></i><i class="font-semibold ri-subtract-line text-amber-500"></i></p>
            </div>
            <div class="flex flex-col items-center justify-center gap-2">
                <p class="text-lg font-bold text-center md:text-2xl">Company Profile Kami</p>
                @if($video->count() > 0)
                    @php
                        function convertToEmbedUrl($url) {
                            if (strpos($url, 'youtu.be/') !== false) {
                                return str_replace('youtu.be/', 'www.youtube.com/embed/', $url);
                            } elseif (strpos($url, 'watch?v=') !== false) {
                                return str_replace('watch?v=', 'embed/', $url);
                            }
                            return $url; // fallback
                        }
                    @endphp
                    <iframe
                        src="{{ convertToEmbedUrl($video->video_path) }}"
                        loading="lazy"
                        title="{{ $video->title }}"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        class="aspect-video w-[90svw] sm:w-[50svw] rounded-md drop-shadow-md">
                    </iframe>
                @endif
            </div>
        </div>
    </div>
    <div class="mt-10">
        <x-footer/>
    </div>
</body>
</html>
