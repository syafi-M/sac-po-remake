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
    <div class="pt-[4.5rem] md:pt-20  w-full h-screen ">
        {{-- slider --}}
        <div class="w-full h-2/5 relative ">
            <div class="mx-5 absolute inset-0 py-2 sm:flex sm:justify-center sm:flex-col sm:items-center">
                <div class="slider flex carousel rounded-md aspect-[21/9] sm:h-full">
                    @for ($i = 1; $i < 6; $i++)
                    <div class="carousel-item">
                        <img src="https://placehold.co/2100x900" alt="Image 1" class="object-cover"
                            style=" transition: transform 0.5s ease-in-out;">
                    </div>
                    @endfor
                    
                </div>
                <ul class="slider-bullets">
                    <li class="slider-bullet" data-slide="0"></li>
                    <li class="slider-bullet" data-slide="1"></li>
                    <li class="slider-bullet" data-slide="2"></li>
                    <li class="slider-bullet" data-slide="3"></li>
                    <li class="slider-bullet" data-slide="4"></li>
                </ul>
            </div>
        </div>

        {{-- anchor --}}
        <div class="mx-5 md:mx-10 mt-10 ">
            <p class="text-sm text-center md:text-start md:text-base font-semibold"><i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i> Melayani Dengan Lebih Baik <i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i></p>
        </div>
        {{-- hero --}}
        <div class="mx-5 md:mx-10 md:flex mt-5 bg-lime-600 p-2 md:py-5 rounded-md drop-shadow-md text-slate-50">
            <div class="md:w-2/3">
                <p class="font-black capitalize text-2xl">PT Surya Amanah Cendekia Ponorogo</p>
                <p class="pt-5 font-medium text-lg text-slate-50">Diakui sebagai perusahaan penyedia jasa dengan Sumber Daya Manusia (SDM) yang unggul dan berwawasan saling menguntungkan.</p>
            </div>
            <div class="pt-5 flex gap-2 justify-around w-full md:w-1/3 md:items-end">
                <span class="w-1/2">
                    <a href="#" class="btn btn-md w-full btn-info">Layanan Kami</a>
                </span>
                <span class="w-1/2">

                    <a href="#" class="btn btn-md w-full btn-success">Tentang Kami</a>
                </span>
            </div>
        </div>
        {{-- tujuan --}}
        <div class="mx-5 md:mx-10 mt-5">
            <p class="text-sm text-center font-semibold"><i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i> Tujuan PT SAC Ponorogo <i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i></p>
        </div>
        <div class="mx-5 md:mx-10 mt-5 text-center ">
            <p class="font-bold capitalize text-xl">PT Surya Amanah Cendekia Ponorogo</p>
            <p class="font-medium pt-2 capitalize text-lg">Memiliki Beberapa Tujuan Diantaranya adalah sebagai Berikut</p>
            <div class="pt-5 md:flex md:items-start md:w-full">
                <div class="flex flex-col items-center md:w-1/3 justify-center gap-4">
                    <img src="{{ asset('image/imeg1.png') }}" width="200" alt="imeg1" srcset="">
                    <p class="font-medium capitalize text-lg">Membantu Menjaga Kebersihan Dan Kenyamanan Setiap Ruangan Dalam Gedung Klien Kami.</p>
                </div>
                <div class="flex flex-col items-center md:w-1/3 justify-center gap-4">
                    <img src="{{ asset('image/imeg2.png') }}" width="200" alt="imeg1" srcset="">
                    <p class="font-medium capitalize text-lg">Membantu Perawatan Gedung Dan Taman Klien Kami.</p>
                </div>
                <div class="flex flex-col items-center md:w-1/3 justify-center gap-4">
                    <img src="{{ asset('image/imeg3.png') }}" width="200" alt="imeg1" srcset="">
                    <p class="font-medium capitalize text-lg">Memudahkan Klien Kami Dengan Lebih Praktis Dan Biaya Hemat.</p>
                </div>
            </div>
        </div>  
        {{-- budaya Kerja --}}
        <div class="mx-5 md:mx-10 mt-5 ">
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
        </div>
        {{-- additional --}}
        <div class="mx-5 md:mx-10 mt-5 bg-gradient-to-bl from-amber-500 via-orange-400 to-rose-300 flex justify-center rounded-lg">
            <div class="p-4">
                <span class="flex items-center gap-2">
                    <i class="ri-customer-service-2-fill text-4xl font-bold text-white"></i>
                    <p class="text-xl font-bold text-white">Responsible</p>
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-share-fill text-4xl font-bold text-white"></i>
                    <p class="text-xl font-bold text-white">Share</p>
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-settings-4-fill text-4xl font-bold text-white"></i>
                    <p class="text-xl font-bold text-white">Principle</p>
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-sparkling-2-fill text-4xl font-bold text-white"></i> 
                    <p class="text-xl font-bold text-white">Excellent</p>
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-user-smile-fill text-4xl font-bold text-white"></i> 
                    <p class="text-xl font-bold text-white">Euthusiasme</p>
                </span>
                <span class="flex items-center gap-2">
                    <i class="ri-shake-hands-fill text-4xl font-bold text-white"></i> 
                    <p class="text-xl font-bold text-white">Commitment</p>
                </span>
            </div>
        </div>
        {{-- client --}}
        <div class="mx-5 md:mx-10 mt-5">
            <div class="mx-5 my-5">
                <p class="text-base text-center font-bold"><i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i> Our Client <i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div class="grid grid-cols-3 md:grid-cols-5 justify-center gap-2">
                @for ($i = 1; $i < 10; $i++)
                    <div class="flex flex-col items-center">
                        <img src="https://placehold.co/64x64/orange/white" alt="imeg1" srcset="">
                        <p class="text-xs font-semibold">aku mitra ke {{ $i }}</p>
                    </div>
                @endfor
            </div>
        </div>
        {{-- Berita Terkini --}}
        <div class="mx-5 md:mx-10 mt-5">
            <div class="mx-5 my-5">
                <p class="text-base text-center font-bold"><i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i> Berita Terkini <i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div class="beritaSlider carousel rounded-md aspect-video">
                @for ($i = 1; $i < 5; $i++)
                    <div class="carousel-item w-1/2 flex flex-col mx-1 font-medium transition-all duration-300 ease-in-out max-w-md">
                        <img src="https://placehold.co/1600x900/orange/white" alt="imeg1" srcset="" class="rounded-md object-cover">
                        <p class="text-sm md:text-base pt-4 font-semibold text-slate-400">{{ Carbon\Carbon::now()->format('Y-m') }}-{{ $i }}</p>
                        <p class="text-sm md:text-base pb-2 capitalize line-clamp-3">judul {{ $i }}</p>
                    </div>
                @endfor
            </div>
        </div>
        {{-- Testimoni --}}
        <div class="mx-5 md:mx-10 mt-5">
            <div class="mx-5 my-5">
                <p class="text-base text-center font-bold"><i class="ri-subtract-line font-semibold text-amber-500"></i> Testimonial Pengguna Jasa <i class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div class="carousel testiSlider w-full space-x-4">
                <div class="carousel-item flex flex-col gap-2 text-center items-center whitespace-pre-line w-full transition-all duration-300 ease-in-out">
                    <p>Pelayanan bagus, cepat dan rapi. Pakaian karyawan juga semua rapi rapi recomended banget
                    </p>
                    <p class="font-semibold">- Pengguna Jasa PT. SAC Ponorogo -</p>
                </div>
                <div class="carousel-item flex flex-col gap-2 text-center items-center whitespace-pre-line w-full transition-all duration-300 ease-in-out">
                    <p>Aplikasi absensi dan pelaporan dari karyawan sangat inovatif,
                        bukan hanya itu absensi menggunakan lokasi serta pelaporan menggunakan
                        barcode scan</p>
                    <p class="font-semibold">- Pengguna Jasa PT. SAC Ponorogo -</p>
                </div>
                <div class="carousel-item flex flex-col gap-2 text-center items-center whitespace-pre-line w-full transition-all duration-300 ease-in-out">
                    <p>Cukup satu kata luar biasa, bisa sat set segala hal bersih, rapi
                        Satpam juga sigap, bisa diandalkan</p>
                    <p class="font-semibold">- Pengguna Jasa PT. SAC Ponorogo -</p>
                </div>
            </div>
        </div>

        {{-- footer --}}
        <div class="mt-10">
            <x-footer/>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            let currentSlide = 0;
            let currentBerita = 0;
            let currentTesti = 0;
            let intervalID;
            const slides = document.querySelectorAll('.slider img');
            const beritaSlider = document.querySelectorAll('.beritaSlider div');
            const testiSlider = document.querySelectorAll('.testiSlider div');
            const bullets = document.querySelectorAll('.slider-bullet');

            function showSlide(n) {
                slides.forEach((slide) => {
                    slide.style.transform = 'translateX(' + (n * -100) + '%)'; // Adjusting the direction of translation
                });
                bullets.forEach((bullet, index) => {
                    if (index == n) {
                        bullet.classList.add('active');
                    } else {
                        bullet.classList.remove('active');
                        
                    }
                });
            };
            function showBerita(n){
                // console.log(n);
                beritaSlider.forEach((berita) => {
                    berita.style.transform = 'translateX(' + (n * -107) + '%)';
                });
            };
            function showTesti(n){
                // console.log(n);
                testiSlider.forEach((testi) => {
                    testi.style.transform = 'translateX(' + (n * -105) + '%)';
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
                currentBerita = (currentBerita + 1) % beritaSlider.length;
                showBerita(currentBerita);
            }
            function prevBerita() {
                currentBerita = (currentBerita - 1) % beritaSlider.length % beritaSlider.length;
                showBerita(currentBerita);
            }
            function nextTesti() {
                currentTesti = (currentTesti + 1) % testiSlider.length;
                showTesti(currentTesti);
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
            setInterval(nextTesti, 5500);
            setInterval(nextBerita, 6500);
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
