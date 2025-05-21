<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Website portal berita serta deskripsi sac PT. Surya Amanah Cendekia">
    <meta name="keywords" content="sac, surya amanah cendekia, cleaning service, security, outsourcing, PT. Surya Amanah Cendekia, PT. Surya Amanah Cendikia">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5252551755919202"
     crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <title>PT. Surya Amanah Cendikia Ponorogo – Penyedia Outsourcing & Pengembangan SDM Profesional</title>
    <style>
        .slider-bullets {
            display: flex;
            justify-content: center;
            margin-top: 10px;
            list-style: none;
            padding: 0;
        }

        .slider-bullet {
            width: 10px;
            height: 10px;
            background-color: gray;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }

        .slider-bullet.active {
            background-color: black;
        }
        .clientDiv {
            max-width: 25svw; 
            @media (min-width: 768px) { 
                width: 10svw; 
            }
        }
        .beritaSlider {
            max-height: 50svh;
            @media (min-width: 768px) {
                max-height: 45svh;
            }
        }
        .beritaSlider div {
            width: 45svw;
            padding: 0 2.5svw 0 2.5svw;
            @media (min-width: 768px) {
                width: 20svw;
                padding: 0 2.5svw 0 2.5svw;
            }
        }
        .coopSlider {
            justify-content: start;
            @media (min-width: 1024px) { 
                justify-content: center;                
            }
        }
        
        .img-berita {
            transition: transform 0.3s ease, z-index 0.3s ease;
        }
        
        .img-berita img {
            transition: transform 0.3s ease;
        }
        .img-berita:hover {
            transform: scale(1);
            @media (min-width: 768px) {
                transform: scale(1.05);
            }
        }
        
        /* Optional: Different hover effects for different images */
        .img-berita:nth-child(odd):hover .img1 {
            transform: scale(1) rotate(0deg);
            @media (min-width: 768px) {
                transform: scale(1.03) rotate(-3deg);
            }
        }
        
        .img-berita:nth-child(even):hover .img1 {
            transform: scale(1) rotate(0deg);
            @media (min-width: 768px) {
                transform: scale(1.03) rotate(3deg);
            }
        }
        .img-berita:nth-child(odd):hover .img2 {
            transform: scale(1) rotate(0deg);
            @media (min-width: 768px) {
                transform: scale(1.03) rotate(2deg);
            }
        }
        
        .img-berita:nth-child(even):hover .img2 {
            transform: scale(1) rotate(0deg);
            @media (min-width: 768px) {
                transform: scale(1.03) rotate(-2deg);
            }
        }
        
        .beritaSlider {
            min-height: 40svh;
            @media (min-width: 768px) {
                min-height: 50svh;
            }
        }

        @keyframes slideLeftThenBack {
        0% {
            transform: translateX(0);
        }
        50% {
            transform: translateX(-80pt); /* move to the left */
        }
        100% {
            transform: translateX(0); /* return to original */
        }
        }

        .animate-left-bounce {
            animation: slideLeftThenBack 1.5s ease-in-out;
        }

        .animate-left-bounce2 {
            animation: slideLeftThenBack 1.7s ease-in-out;
        }

    </style>
</head>

<body class=" min-w-full min-h-screen">
    <div>
        <x-navbar />
    </div>
    <div class="pt-[4.5rem] md:pt-20 w-full h-screen ">
        {{-- slider --}}
        <div class="w-full h-[35svh] md:h-[65svh] relative">
            <div class="absolute rounded-md inset-0 py-2 flex justify-center flex-col items-center">

                <div class="slider flex carousel rounded-md mx-[2.5svw] sm:h-full">
                    @forelse ($banner as $item)
                        <div class="carousel-item aspect-[21/9] md:aspect-auto rounded-md">
                            <img src="{{ asset('storage/images/'.$item->img) }}" alt="Image 1" width="2100" height="900"
                                    class=" object-center w-[95svw] h-[25svh] md:h-[55svh] rounded-md"
                                    style=" transition: transform 0.5s ease-in-out;"
                                    loading="lazy">
                        </div>
                    @empty
                    <div class="carousel-item aspect-[21/9] md:aspect-auto rounded-md">
                        <p class="text-center font-bold text-slate-500">Data kosong</p>
                    </div>
                    @endforelse
                    {{-- <div class="carousel-item aspect-[21/9] md:aspect-auto rounded-md">
                        <img src="{{ asset('image/banner_disnaker.jpg') }}" alt="Image 1" width="2100" height="900"
                                class=" object-center w-[95svw] h-[25svh] md:h-[55svh] rounded-md"
                                style=" transition: transform 0.5s ease-in-out;">
                    </div> --}}
                </div>

                <ul class="slider-bullets">
                    @forelse ($banner as $i => $item)
                        <li class="slider-bullet" data-slide="{{ $i }}"></li>
                    @empty
                    @endforelse
                    {{-- <li class="slider-bullet" data-slide="1"></li> --}}
                </ul>
            </div>
        </div>
        
        {{-- Berita Terkini --}}
        <div class="mt-5 div-news">
            <div class="mx-5 my-5">
                <p class="text-base text-center font-bold"><i
                        class="ri-subtract-line font-semibold text-amber-500"></i><i
                        class="ri-subtract-line font-semibold text-amber-500"></i> Berita Terkini <i
                        class="ri-subtract-line font-semibold text-amber-500"></i><i
                        class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div class="w-full flex flex-col md:flex-row">
                @if($video->count() > 0)
                <div class="bg-lime-600 w-full md:w-[40%] min-h-[220pt] md:h-auto rounded-b-md md:rounded-r-md md:rounded-bl-none flex overflow-x-scroll carousel">
                    @forelse ($video as $vid)
                        <div class="flex flex-col pt-2 justify-start items-center w-full transition-all duration-300 ease-in-out carousel-item vidDiv">
                            <div class="flex flex-col justify-center items-center w-full max-w-[23rem] md:max-w-[26rem] p-2">
                                <iframe class="w-full aspect-video rounded-md" src="{{ URL::asset('storage/' . $vid->video_path) }}?autoplay=0" 
                                    loading="lazy"
                                    title="{{ $vid->title }}" 
                                    frameborder="0" 
                                    sandbox="allow-same-origin allow-scripts allow-forms allow-popups allow-presentation"
                                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                            <div class="text-center">
                                <p class="font-semibold capitalize md:text-xl text-white">{{ $vid->title }}</p>
                                <p class="font-semibold capitalize text-white text-xs mdtext-sm">{{ $vid->description }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="flex flex-col pt-2 justify-start items-center w-full transition-all duration-300 ease-in-out carousel-item vidDiv">
                            <div class="flex flex-col justify-center items-center w-full max-w-[23rem] md:max-w-[26rem] p-2">
                                Kosong
                            </div>
                            <div class="text-center">
                                <p class="font-semibold capitalize md:text-xl text-white">-</p>
                                <p class="font-semibold capitalize text-white text-xs mdtext-sm">-</p>
                            </div>
                        </div>
                    @endforelse
                </div>
                @endif
                <div class="beritaSlider w-full {{ $video ? ' md:w-[60%]' : '' }} relative z-[90] pt-[3vh] overflow-x-scroll overflow-y-hidden carousel rounded-md aspect-video">
                    @forelse ($artikel as $art)
                        <div
                            class="carousel-item font-medium  transition-all duration-300 ease-in-out img-berita">
                            <a href="{{ route('artikel', $art->id) }}" class="flex flex-col">
                                <div class="relative flex justify-center items-start h-[65pt] md:h-[110pt]">
                                    <img src="{{ asset('storage/images/'.$art->img) }}" alt="imeg1" srcset="" loading="lazy"
                                        srcset="{{ asset('storage/images/'.$art->img) }} 1x, {{ asset('storage/images/'.$art->img.'_2x') }} 2x" 
                                        sizes="(max-width: 600px) 100vw, 50vw" 
                                        class="rounded-md object-cover aspect-video absolute z-[3] img1">
                                    <img src="{{ asset('storage/images/'.$art->img) }}" alt="imeg1" srcset="" loading="lazy"
                                        srcset="{{ asset('storage/images/'.$art->img) }} 1x, {{ asset('storage/images/'.$art->img.'_2x') }} 2x" 
                                        sizes="(max-width: 600px) 100vw, 50vw" 
                                        class="rounded-md object-cover aspect-video absolute z-[2] opacity-45 blur-[2px] img2">
                                </div>
                                <p class="text-sm md:text-base pt-4 font-semibold text-slate-400">
                                    {{ $art->created_at->format('Y-m-d') }}</p>
                                <p class="text-sm md:text-base capitalize line-clamp-3">{{ $art->title }}</p>
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>

        {{-- anchor --}}
        <div class="mx-5 md:mx-10 mt-10 ">
            <p class="text-sm text-center md:text-base font-semibold"><i
                    class="ri-subtract-line font-semibold text-amber-500"></i><i
                    class="ri-subtract-line font-semibold text-amber-500"></i> Melayani Dengan Lebih Baik <i
                    class="ri-subtract-line font-semibold text-amber-500"></i><i
                    class="ri-subtract-line font-semibold text-amber-500"></i></p>
        </div>
        {{-- hero --}}
        <div class="mx-5 md:mx-10 md:flex mt-5 bg-lime-600 p-2 md:p-5 rounded-md drop-shadow-md text-slate-50">
            <div class="md:w-2/3">
                <p class="font-black capitalize text-2xl">PT Surya Amanah Cendekia Ponorogo</p>
                <p class="pt-5 font-medium text-lg text-slate-50">Diakui sebagai perusahaan penyedia jasa dengan Sumber
                    Daya Manusia (SDM) yang unggul dan berwawasan saling menguntungkan.</p>
            </div>
            <div class="pt-5 gap-2 flex flex-col justify-around w-full md:w-1/3 md:items-end">
                <div class="flex gap-2 w-full">
                    <span class="w-1/2">
                        <a href="{{ route('outsourcing-perusahaan') }}"
                            class="btn btn-md w-full bg-lime-800 hover:bg-lime-700 border-none text-slate-50">Layanan
                            Kami</a>
                    </span>
                    <span class="w-1/2">
    
                        <a href="{{ route('profile-perusahaan') }}"
                            class="btn btn-md w-full bg-slate-50 text-slate-800">Tentang Kami</a>
                    </span>
                </div>
                <div class="w-full">
                    <span class="w-1/2">
    
                        <a href="{{ route('aplikasi.index') }}"
                            style="background-color: #57534e;"
                            class="btn btn-md w-full text-slate-50 border-none">System Aplikasi Kerja</a>
                    </span>
                </div>
            </div>
        </div>
        {{-- tujuan --}}

        <div class="mx-5 md:mx-10 mt-5 md:mt-10 text-center ">
            <div class="pt-5 md:flex md:items-start md:w-full">
                <div class="flex flex-col items-center md:w-1/2 justify-between gap-4">
                    <img src="{{ asset('image/outsourcing.svg') }}" width="250" alt="imeg1" srcset="">
                    <div class="flex flex-col items-center justify-end">
                        <p class="font-black capitalize text-2xl text-lime-600">{{ $userCount }}±</p>
                        <p class="font-bold capitalize text-lg">Outsourcing</p>
                        <p class="font-semibold capitalize text-lg">( Cleaning Service, Security, etc )</p>
                    </div>
                </div>
                <div class="flex flex-col items-center md:w-1/2 justify-between gap-4">
                    <img src="{{ asset('image/mitra.svg') }}" width="250" alt="imeg1" srcset="">
                    <div class="flex flex-col items-center justify-end">
                        <p class="font-black capitalize text-2xl text-lime-600">23</p>
                        <p class="font-bold capitalize text-lg">Mitra</p>
                        <p class="font-semibold capitalize text-lg">( Rumah Sakit, Sekolah, Etc )</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- budaya Kerja --}}
        {{-- <div class="mx-5 md:mx-10 mt-5 ">
            <p class="text-sm text-center font-semibold"><i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i> Budaya Kerja Perusahaan <i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i></p>
        </div>
        <div class="mx-5 md:mx-10 md:flex ">
            <div class="md:w-1/2 mt-5">
                <div class="flex justify-center"><i class="ri-service-fill text-9xl text-amber-500"></i></div>
                <p class="font-bold text-xl text-center">SIGAP</p>
                <div class="flex justify-center items-center pt-4">
                    <ul class="font-semibold text-lg">
                        <li><i class="ri-subtract-line font-semibold text-amber-500"></i> Safety</li>
                        <li><i class="ri-subtract-line font-semibold text-amber-500"></i> Inisiatif</li>
                        <li><i class="ri-subtract-line font-semibold text-amber-500"></i> Gesit</li>
                        <li><i class="ri-subtract-line font-semibold text-amber-500"></i> Amanah</li>
                        <li><i class="ri-subtract-line font-semibold text-amber-500"></i> Peduli</li>
                    </ul>
                </div>
            </div>
            <div class="md:w-1/2 mt-5">
                <div class="flex justify-center"><i class="ri-eraser-fill text-9xl text-amber-500"></i></div>
                <p class="font-bold text-xl text-center">RESIK</p>
                <div class="flex justify-center items-center pt-4">
                    <ul class="font-semibold text-lg">
                        <li><i class="ri-subtract-line font-semibold text-amber-500"></i> Religius</li>
                        <li><i class="ri-subtract-line font-semibold text-amber-500"></i> Excellent</li>
                        <li><i class="ri-subtract-line font-semibold text-amber-500"></i> Service</li>
                        <li><i class="ri-subtract-line font-semibold text-amber-500"></i> Integrity</li>
                        <li><i class="ri-subtract-line font-semibold text-amber-500"></i> Komitmen</li>
                    </ul>
                </div>
            </div>
        </div> --}}
        {{-- kerjasama --}}
        {{-- <div class=" mt-5">
            <div class="mx-5 my-5">
                <p class="text-base text-center font-bold"><i
                        class="ri-subtract-line font-semibold text-amber-500"></i><i
                        class="ri-subtract-line font-semibold text-amber-500"></i> Bekerjasama Dengan <i
                        class="ri-subtract-line font-semibold text-amber-500"></i><i
                        class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div class="coopSlider w-full carousel transition-all duration-300 ease-in-out px-[2.5svw]" style="height: 100%; max-height: 32svh;" id="scrollCoop">
                @forelse ($coop as $cli)
                    <div
                        class="flex flex-col justify-end coopDiv carousel-item aspect-square px-[4svw] md:px-[0.5svw] transition-all duration-300 ease-in-out"
                        style="gap: 1rem;">
                        <span class="flex justify-center">
                            <img src="{{ asset('storage/images/'. $cli->img) }}" width="100" class="rounded-md object-cover" alt="imeg1" loading="lazy"
                                srcset="">
                        </span>
                        <p class="text-center font-semibold text-xs "
                        style="width: 100%; @media (min-width: 768px) { max-width: 5svw; } text-align: center;">{{ $cli->name }}</p>
                    </div>
                @empty                    
                @endforelse

            </div>
        </div> --}}
        {{-- peta --}}
        <p class="font-bold capitalize text-center mt-5 mb-2 text-xl">Lokasi Mitra PT. SAC</p>
        <div
            class="mx-5 md:mx-10 mt-5 outline-4 outline-dashed outline-amber-500 drop-shadow-md outline-offset-2 bg-gradient-to-bl from-stone-700 via-stone-600 to-stone-500 flex justify-center rounded-lg">
            <div class="p-1 w-full relative">
                <img src="{{ asset('image/map.png') }}" alt="">
                
                <!--surabaja-->
                <!--<div style="position: absolute; z-index: 1; left: 38.8%; top: 76.2%; width: 0.4rem; height: 0.4rem;" class="bg-white rounded-full"></div>-->
                <!--<div style="position: absolute; z-index: 2; left: 38.9%; top: 70%; width: 3.125rem; height: 2.1875rem; border-top: 0.25rem solid; border-left: 0.25rem solid; border-color: white; border-radius: 0.625rem 0 0 0;" class=""></div>-->
                <!--<div style="position: absolute; z-index: 3; left: 43%; top: 68.6%;" class="text-white text-sm">Surabaya</div>-->
                <!--malongan-->
                <!--<div style="position: absolute; z-index: 1; left: 38.25%; top: 75.9%; width: 0.4rem; height: 0.4rem;" class="bg-white rounded-full"></div>-->
                <!--<div style="position: absolute; z-index: 2; left: 38.3%; bottom: 23.8%; width: 45px; height: 55px; border-top: 4px solid; border-left: 4px solid; border-color: white; border-radius: 10px 0 0 0;" class=""></div>-->
                <!--<div style="position: absolute; z-index: 3; left: 42.2%; bottom: 31.8%;" class="text-white text-sm">Lamongan</div>-->
                <!--sidoarjo-->
                <!--<div style="position: absolute; z-index: 1; left: 38.8%; top: 77.4%; width: 0.4rem; height: 0.4rem;" class="bg-white rounded-full"></div>-->
                <!--<div style="position: absolute; z-index: 2; left: 39%; bottom: 21.7%; width: 80px; height: 4px; border-top: 4px solid; border-left: 4px solid; border-color: white;" class=""></div>-->
                <!--<div style="position: absolute; z-index: 3; left: 45.6%; bottom: 20.2%;" class="text-white text-sm">Sidoarjo</div>-->
                <!--ogoronop-->
                <!--<div style="position: absolute; z-index: 1; left: 35.8%; top: 80.8%; width: 0.4rem; height: 0.4rem;" class="bg-white rounded-full"></div>-->
                <!--<div style="position: absolute; z-index: 2; left: 33.5%; bottom: 10%; width: 35px; height: 45px; border-bottom: 4px solid; border-right: 4px solid; border-color: white; border-radius: 0 0 10px 0;" class=""></div>-->
                <!--<div style="position: absolute; z-index: 3; left: 28.4%; bottom: 8.6%;" class="text-white text-sm">Ponorogo</div>-->
                <!--mbediun-->
                <!--<div style="position: absolute; z-index: 1; left: 36.3%; top: 79.5%; width: 0.4rem; height: 0.4rem;" class="bg-white rounded-full"></div>-->
                <!--<div style="position: absolute; z-index: 2; left: 36.4%; bottom: 10%; width: 35px; height: 55px; border-bottom: 4px solid; border-left: 4px solid; border-color: white; border-radius: 0 0 0 10px;" class=""></div>-->
                <!--<div style="position: absolute; z-index: 3; left: 39.4%; bottom: 8.5%;" class="text-white text-sm">Madiun</div>-->
            </div>
        </div>
        {{-- client --}}
        <div class=" mt-5">
            <div class="mx-5 my-5">
                <p class="text-base text-center font-bold"><i
                        class="ri-subtract-line font-semibold text-amber-500"></i><i
                        class="ri-subtract-line font-semibold text-amber-500"></i> Klien Kami <i
                        class="ri-subtract-line font-semibold text-amber-500"></i><i
                        class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div class="clientSlider w-full carousel transition-all duration-300 ease-in-out px-[2.5svw]" style="height: 100%; max-height: 32svh;" id="scrollContainer">
                @forelse ($client as $cli)
                    <div
                        class="flex flex-col justify-around clientDiv carousel-item aspect-square px-[4svw] md:px-[0.5svw] transition-all duration-300 ease-in-out"
                        style="gap: 1rem;">
                        <span class="flex justify-center items-center">
                            <img src="{{ asset('storage/images/'. $cli->img) }}" width="100" class="rounded-md object-cover" alt="imeg1" loading="lazy"
                                srcset="">
                        </span>
                        <p class="text-center font-semibold text-xs "
                        style="width: 100%; @media (min-width: 768px) { max-width: 5svw; } text-align: center;">{{ $cli->name }}</p>
                    </div>
                @empty                    
                @endforelse

            </div>
        </div>
        
        {{-- Testimoni --}}
        <div class=" mt-5">
            <div class="mx-5 my-5">
                <p class="text-base text-center font-bold"><i
                        class="ri-subtract-line font-semibold text-amber-500"></i> Testimonial Pengguna Jasa <i
                        class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div class="carousel testiSlider w-full" style="font-style: italic;">
                <div
                    class="carousel-item flex flex-col  gap-2 text-center items-center whitespace-pre-line w-[90svw] px-[5svw] transition-all duration-300 ease-in-out">
                    <p>"Pelayanan bagus, cepat dan rapi. Pakaian karyawan juga semua rapi rapi recomended banget"
                    </p>
                    <p class="font-semibold">- Pengguna Jasa PT. SAC Ponorogo -</p>
                </div>
                <div
                    class="carousel-item flex flex-col  gap-2 text-center items-center whitespace-pre-line w-[90svw] px-[5svw] transition-all duration-300 ease-in-out">
                    <p>"Aplikasi absensi dan pelaporan dari karyawan sangat inovatif,
                        bukan hanya itu absensi menggunakan lokasi serta pelaporan menggunakan
                        barcode scan"</p>
                    <p class="font-semibold">- Pengguna Jasa PT. SAC Ponorogo -</p>
                </div>
                <div
                    class="carousel-item flex flex-col  gap-2 text-center items-center whitespace-pre-line w-[90svw] px-[5svw] transition-all duration-300 ease-in-out">
                    <p>"Cukup satu kata luar biasa, bisa sat set segala hal bersih, rapi
                        Satpam juga sigap, bisa diandalkan"</p>
                    <p class="font-semibold">- Pengguna Jasa PT. SAC Ponorogo -</p>
                </div>
            </div>
        </div>

        {{-- footer --}}
        <div class="mt-10">
            <x-footer />
        </div>
    </div>
    <script>
        window.onload = function () {
            const items = document.querySelectorAll('.img-berita');
            const vid = document.querySelectorAll('.vidDiv');
            items.forEach(item => {
                item.classList.add('animate-left-bounce');
            });
            vid.forEach(item => {
                item.classList.add('animate-left-bounce2');
            });
        };
       $(document).ready(function() {
            const width = $(window).width();
            const isSM = width <= 640;
            const isMD = width <= 768;
            const jmlSkip = isSM ? 2 : 8;

            let currentSlide = 0;
            let currentTesti = 0;
            let currentClient = 0;
            let currentCoop = 0;
            let intervalID;
            let cPost = 0;

            const slides = $('.slider img');
            const beritaSlider = $('.beritaSlider div');
            const testiSlider = $('.testiSlider div');
            const clientSlider = $('.clientSlider div');
            const coopSlider = $('.coopSlider div');
            const bullets = $('.slider-bullet');

            // Pagination click handlers
            $('#prevPost').click(() => {
                if (cPost > 0) {
                    cPost--;
                    $('#currentPost').text(cPost);
                    updateSliderTransform(beritaSlider, cPost, -100);
                }
            });

            $('#nextPost').click(() => {
                if (cPost < (beritaSlider.length - jmlSkip)) {
                    cPost++;
                    $('#currentPost').text(cPost);
                    updateSliderTransform(beritaSlider, cPost, -100);
                }
            });

            // Update transform style for sliders
            function updateSliderTransform(sliderElements, index, percentage) {
                sliderElements.css('transform', `translateX(${index * percentage}%)`);
            }

            // Show specific slide
            function showSlide(n) {
                updateSliderTransform(slides, n, -100);
                bullets.removeClass('active').eq(n).addClass('active');
            }

            // Show specific client
            function showClient(n) {
                updateSliderTransform(clientSlider, n, -100);
            }

            // Show specific cooperation
            function showCoop(n) {
                updateSliderTransform(coopSlider, n, -25);
            }

            // Show specific testimonial
            function showTesti(n) {
                updateSliderTransform(testiSlider, n, -100);
            }

            // Automatic sliding functions
            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }

            function nextTesti() {
                currentTesti = (currentTesti + 1) % testiSlider.length;
                showTesti(currentTesti);
            }

            function nextClient() {
                currentClient = (currentClient + 1) % (clientSlider.length / (width <= 768 ? 1 : 2));
                showClient(currentClient);
            }

            function nextCoop() {
                currentCoop = (currentCoop + 1) % (coopSlider.length / (width <= 768 ? 1 : 6));
                showCoop(currentCoop);
            }

            // Start and stop the slide interval
            function startSlideInterval() {
                intervalID = setInterval(nextSlide, 3500);
            }

            function stopSlideInterval() {
                clearInterval(intervalID);
                startSlideInterval();
            }

            // Initialize the sliders and intervals
            showSlide(currentSlide);
            showTesti(currentTesti);
            showClient(currentClient);
            showCoop(currentCoop);

            setInterval(nextTesti, 5500);
            setInterval(nextClient, 3000);
            setInterval(nextCoop, 3500);
            startSlideInterval();

            // Bullet click handler
            bullets.each((index, bullet) => {
                $(bullet).click(() => {
                    currentSlide = index;
                    showSlide(currentSlide);
                    stopSlideInterval();
                });
            });
        });

    </script>
</body>

</html>
