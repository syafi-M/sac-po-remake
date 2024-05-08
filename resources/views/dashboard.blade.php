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
                                    style=" transition: transform 0.5s ease-in-out;">
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
            <div class="pt-5 flex gap-2 justify-around w-full md:w-1/3 md:items-end">
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
        </div>
        {{-- tujuan --}}

        <div class="mx-5 md:mx-10 mt-5 md:mt-10 text-center ">
            {{-- <p class="font-bold capitalize text-xl">PT Surya Amanah Cendekia Ponorogo</p>
            <p class="font-medium pt-2 capitalize text-lg">Info Lebih Lanjut</p> --}}
            <div class="pt-5 md:flex md:items-start md:w-full">
                <div class="flex flex-col items-center md:w-1/3 justify-between gap-4">
                    <img src="{{ asset('image/outsourcing.svg') }}" width="250" alt="imeg1" srcset="">
                    <div class="flex flex-col items-center justify-end">
                        <p class="font-black capitalize text-2xl text-lime-600">300++</p>
                        <p class="font-bold capitalize text-lg">Outsourcing</p>
                        <p class="font-semibold capitalize text-lg">( Cleaning Service, Security, etc )</p>
                    </div>
                </div>
                <div class="flex flex-col items-center md:w-1/3 justify-between gap-4">
                    <img src="{{ asset('image/mitra.svg') }}" width="250" alt="imeg1" srcset="">
                    <div class="flex flex-col items-center justify-end">
                        <p class="font-black capitalize text-2xl text-lime-600">23</p>
                        <p class="font-bold capitalize text-lg">Mitra</p>
                        <p class="font-semibold capitalize text-lg">( Rumah Sakit, Sekolah, Etc )</p>
                    </div>
                </div>
                <div class="flex flex-col items-center md:w-1/3 justify-between gap-4">
                    <img src="{{ asset('image/kerjasama.svg') }}" width="250" alt="imeg1" srcset="">
                    <div class="flex flex-col items-center justify-end">
                        <p class="font-black capitalize text-2xl text-lime-600">5</p>
                        <p class="font-bold capitalize text-lg">Kerjasama</p>
                        <p class="font-semibold capitalize text-lg">( Menara Kamilah, Gada Pratama,Gada Madya,Gada
                            Utama, BNSP RI )</p>
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
        {{-- peta --}}
        <p class="font-bold capitalize text-center mt-5 mb-2 text-xl">Lokasi Mitra PT. SAC</p>
        <div
            class="mx-5 md:mx-10 mt-5 outline-4 outline-dashed outline-amber-500 drop-shadow-md outline-offset-2 bg-gradient-to-bl from-stone-700 via-stone-600 to-stone-500 flex justify-center rounded-lg">
            <div class="p-1 w-full">
                <img src="{{ asset('image/map.png') }}" alt="">
            </div>
        </div>
        {{-- client --}}
        <div class=" mt-5">
            <div class="mx-5 my-5">
                <p class="text-base text-center font-bold"><i
                        class="ri-subtract-line font-semibold text-amber-500"></i><i
                        class="ri-subtract-line font-semibold text-amber-500"></i> Our Client <i
                        class="ri-subtract-line font-semibold text-amber-500"></i><i
                        class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div class="clientSlider w-full carousel transition-all duration-300 ease-in-out px-[2.5svw]" id="scrollContainer">
                @forelse ($client as $cli)
                    <div
                        class="flex flex-col justify-between carousel-item aspect-square w-[20svw] px-[4svw] md:w-[10svw] h-auto md:px-[0.5svw] transition-all duration-300 ease-in-out">
                        <img src="{{ asset('storage/images/'. $cli->img) }}" class="rounded-md object-cover" alt="imeg1"
                            srcset="">
                        <p class="text-center font-semibold text-sm">{{ $cli->name }}</p>
                    </div>
                @empty                    
                @endforelse

            </div>
        </div>
        {{-- Berita Terkini --}}
        <div class="mt-5">
            <div class="mx-5 my-5">
                <p class="text-base text-center font-bold"><i
                        class="ri-subtract-line font-semibold text-amber-500"></i><i
                        class="ri-subtract-line font-semibold text-amber-500"></i> Berita Terkini <i
                        class="ri-subtract-line font-semibold text-amber-500"></i><i
                        class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div class="beritaSlider carousel rounded-md aspect-video px-[2.5svw] w-full max-h-[50svh]">
                @forelse ($artikel as $art)
                    <div
                        class="carousel-item font-medium w-[40svw] px-[5svw] md:w-[15svw] md:px-[5svw]  transition-all duration-300 ease-in-out">
                        <a href="{{ route('artikel', $art->id) }}" class="flex flex-col">
                            <img src="{{ asset('storage/images/'.$art->img) }}" alt="imeg1" srcset=""
                                class="rounded-md object-cover aspect-video">
                            <p class="text-sm md:text-base pt-4 font-semibold text-slate-400">
                                {{ $art->created_at->format('Y-m-d') }}</p>
                            <p class="text-sm md:text-base capitalize line-clamp-3">{{ $art->title }}</p>
                        </a>
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
            <div class="carousel testiSlider w-full">
                <div
                    class="carousel-item flex flex-col  gap-2 text-center items-center whitespace-pre-line w-[90svw] px-[5svw] transition-all duration-300 ease-in-out">
                    <p>Pelayanan bagus, cepat dan rapi. Pakaian karyawan juga semua rapi rapi recomended banget
                    </p>
                    <p class="font-semibold">- Pengguna Jasa PT. SAC Ponorogo -</p>
                </div>
                <div
                    class="carousel-item flex flex-col  gap-2 text-center items-center whitespace-pre-line w-[90svw] px-[5svw] transition-all duration-300 ease-in-out">
                    <p>Aplikasi absensi dan pelaporan dari karyawan sangat inovatif,
                        bukan hanya itu absensi menggunakan lokasi serta pelaporan menggunakan
                        barcode scan</p>
                    <p class="font-semibold">- Pengguna Jasa PT. SAC Ponorogo -</p>
                </div>
                <div
                    class="carousel-item flex flex-col  gap-2 text-center items-center whitespace-pre-line w-[90svw] px-[5svw] transition-all duration-300 ease-in-out">
                    <p>Cukup satu kata luar biasa, bisa sat set segala hal bersih, rapi
                        Satpam juga sigap, bisa diandalkan</p>
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
        $(document).ready(function() {

            var width = $(window).width();
            var isSM = width <= 640;
            var isMD = width <= 768;
            var isLG = width <= 1024;
            var jmlSkip;
            if (isSM) {
                jmlSkip = 1;
            } else if (isMD) {
                jmlSkip = 2;
            } else {
                jmlSkip = 3;
            }
            // console.log(width, isSM);
            let currentSlide = 0;
            let currentBerita = 0;
            let currentTesti = 0;
            let currentClient = 0;
            let intervalID;
            const slides = document.querySelectorAll('.slider img');
            const beritaSlider = document.querySelectorAll('.beritaSlider div');
            const testiSlider = document.querySelectorAll('.testiSlider div');
            const clientSlider = document.querySelectorAll('.clientSlider div');
            const bullets = document.querySelectorAll('.slider-bullet');

            function showSlide(n) {
                slides.forEach((slide) => {
                    slide.style.transform = 'translateX(' + (n * -100) +
                    '%)'; // Adjusting the direction of translation
                });
                bullets.forEach((bullet, index) => {
                    if (index == n) {
                        bullet.classList.add('active');
                    } else {
                        bullet.classList.remove('active');

                    }
                });
            };

            function showClient(n) {
                // console.log(n);
                clientSlider.forEach((client, index) => {
                    client.style.transform = 'translateX(' + (n * -25) + 'svw)';
                });
            };

            function showBerita(n) {
                // console.log(n);
                beritaSlider.forEach((berita) => {
                    berita.style.transform = 'translateX(' + (n * -50) + 'svw)';
                });
            };

            function showTesti(n) {
                // console.log(n);
                testiSlider.forEach((testi) => {
                    testi.style.transform = 'translateX(' + (n * -100) + 'svw)';
                });
            };

            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            }

            function nextBerita() {
                currentBerita = (currentBerita + 1) % (beritaSlider.length - (width <= 640 ? 1 : 4) );
                // console.log(currentBerita);
                showBerita(currentBerita);
            }

            function nextTesti() {
                currentTesti = (currentTesti + 1) % testiSlider.length;
                showTesti(currentTesti);
            }

            function nextClient() {
                currentClient = (currentClient + 1) % (clientSlider.length - (width <= 640 ? 2 : 6));
                // console.log(currentClient);
                showClient(currentClient);
            }

            function startSlideInterval() {
                intervalID = setInterval(nextSlide, 3500);
            }

            function stopSlideInterval() {
                clearInterval(intervalID);
                intervalID = setInterval(nextSlide, 3500);
            }

            showSlide(currentSlide);
            showBerita(currentBerita);
            showTesti(currentTesti);
            showClient(currentClient);
            setInterval(nextTesti, 5500);
            setInterval(nextBerita, 6500);
            setInterval(nextClient, 3000);
            startSlideInterval();

            bullets.forEach((bullet, index) => {
                bullet.addEventListener('click', () => {
                    currentSlide = index;
                    showSlide(currentSlide);
                    stopSlideInterval();
                });
            });
        })
    </script>
</body>

</html>
