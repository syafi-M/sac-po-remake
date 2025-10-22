<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Lihat dokumentasi kegiatan pelatihan, pendampingan, dan aktivitas PT Surya Amanah Cendikia dalam bentuk foto dan video." />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <title>Galeri - PT. Surya Amanah Cendekia</title>
</head>
<body class="min-w-full min-h-screen ">
    <div>
        <x-navbar />
    </div>
    <div class="mx-5 mt-20 md:mt-28 md:mx-10">
        <div class="aspect-[21/9] md:aspect-auto drop-shadow-md">
            <img src="{{ asset('image/bannerProfile.jpeg.jpg') }}"  class="object-cover object-center w-[95svw] h-[30svh] md:h-[55svh] block rounded-md" alt="" srcset="">
        </div>
        <div class="space-y-10">
            <div class="mx-5 mt-10 md:mx-10 ">
                <p class="text-sm font-semibold text-center md:text-base"><i class="font-semibold ri-subtract-line text-amber-500"></i><i class="font-semibold ri-subtract-line text-amber-500"></i> Galeri Perusahaan <i class="font-semibold ri-subtract-line text-amber-500"></i><i class="font-semibold ri-subtract-line text-amber-500"></i></p>
            </div>
            @if($galeri)
                <div class="flex flex-col items-center justify-center gap-2">
                    <p class="text-lg font-bold text-center md:text-2xl">Foto Terbaru</p>
                    <div class="grid items-center justify-center max-w-4xl grid-cols-1 gap-4 md:grid-cols-2">
                        @foreach ($galeri as $i => $item)
                            @php
                                $isLast = $i === count($galeri) - 1;
                                $isOddCount = count($galeri) % 2 !== 0;
                            @endphp
                            <div class="w-full flex justify-center {{ $isLast && $isOddCount ? 'md:col-span-2' : '' }}">
                                <img src="{{ asset('storage/images/' . $item->img) }}" class="object-cover object-center md:max-w-[50svw] md:max-h-[35svh]" alt="Galeri Image" srcset="">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            <div class="flex flex-col items-center justify-center gap-2">
                <p class="text-lg font-bold text-center md:text-2xl">Penyegaran Rutin</p>
                <div class="grid items-center justify-center max-w-4xl grid-cols-1 gap-4 md:grid-cols-2">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="flex justify-center w-full">
                            <img src="{{ asset('image/penyegaran'.$i.'.jpg') }}" class="object-cover object-center md:w-[50svw] md:h-[35svh]" alt="img{{ $i }}" srcset="">
                        </div>
                    @endfor
                </div>
            </div>
            <div class="flex flex-col items-center justify-center gap-2">
                <p class="text-lg font-bold text-center md:text-2xl">Pekerjaan Rutin CS</p>
                <div class="grid items-center justify-center max-w-4xl grid-cols-1 gap-4 md:grid-cols-2">
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="w-full flex justify-center {{$i == 3 && $i % 2 != 0 ? 'md:col-span-2' : '' }}">
                            <img src="{{ asset('image/csrutin'.$i.'.jpg') }}" class="object-cover object-center md:w-[50svw] md:h-[45svh]" alt="img{{ $i }}" srcset="">
                        </div>
                    @endfor
                </div>
            </div>
            <div class="flex flex-col items-center justify-center gap-2">
                <p class="text-lg font-bold text-center md:text-2xl">Briefing Pergantian Shift</p>
                <div class="grid items-center justify-center max-w-4xl grid-cols-1 gap-4 md:grid-cols-2">
                    @for ($i = 1; $i < 7; $i++)
                        <div class="flex justify-center w-full">
                            <img src="{{ asset('image/briefing'.$i.'.jpeg') }}" class="object-cover object-center md:w-[50svw] md:h-[35svh]" alt="img{{ $i }}" srcset="">
                        </div>
                    @endfor
                </div>
            </div>
            <div class="flex flex-col items-center justify-center gap-2">
                <p class="text-lg font-bold text-center md:text-2xl">Upgrading Skill Kepemimpinan Dan Kerohanian</p>
                <div class="grid items-center justify-center max-w-4xl grid-cols-1 gap-4 md:grid-cols-2">
                    @for ($i = 1; $i < 7; $i++)
                        <div class="flex justify-center w-full">
                            <img src="{{ asset('image/upgrading'.$i.'.jpg') }}" class="object-cover object-center md:w-[50svw] md:h-[35svh]" alt="img{{ $i }}" srcset="">
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
