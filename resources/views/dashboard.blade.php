<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta -->
    <meta name="description"
        content="PT. Surya Amanah Cendekia (SAC) – Outsourcing profesional untuk cleaning service, security, tenaga kerja, serta pengembangan SDM di Indonesia." />
    <meta name="keywords"
        content="SAC, Surya Amanah Cendekia, outsourcing Ponorogo, cleaning service Ponorogo, jasa keamanan Ponorogo, jasa outsourcing profesional, PT. Surya Amanah Cendekia, pengembangan SDM Ponorogo, tenaga kerja outsourcing Indonesia">
    <meta name="author" content="PT. Surya Amanah Cendekia">

    <!-- Open Graph (Facebook & Social Media) -->
    <meta property="og:title" content="PT. Surya Amanah Cendekia Ponorogo – Jasa Outsourcing & Pengembangan SDM">
    <meta property="og:description"
        content="Penyedia jasa outsourcing terpercaya di Ponorogo dan Indonesia. Cleaning service, security, serta pengembangan SDM profesional.">
    <meta property="og:image" content="{{ asset('image/sac.png') }}">
    <meta property="og:url" content="https://sac-po.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PT. Surya Amanah Cendekia – Outsourcing & Pengembangan SDM">
    <meta name="twitter:description"
        content="Outsourcing cleaning service, security, tenaga kerja profesional, dan pengembangan SDM di Ponorogo & Indonesia.">
    <meta name="twitter:image" content="{{ asset('image/sac.png') }}">

    <link rel="icon" type="image/png" href="{{ asset('image/sac.png') }}" />

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://unpkg.com">
    <link rel="preconnect" href="https://pagead2.googlesyndication.com">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,900&display=swap" rel="stylesheet" />

    <!-- Scripts - Defer non-critical scripts -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5252551755919202"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script defer src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="{{ asset('js/jquery.min.js') }}"></script>
    <title>PT. SAC - Layanan Outsourcing & SDM</title>

    <style>
        /* CSS Variables for consistent theming */
        :root {
            --primary-color: #65A30D;
            --secondary-color: #84CC16;
            --accent-color: #FBBF24;
            --text-dark: #1F2937;
            --text-light: #F9FAFB;
            --bg-light: #F3F4F6;
            --bg-dark: #1F2937;
            --transition-speed: 0.3s;
        }

        /* Base styles */
        .slider-bullet {
            width: 10px;
            height: 10px;
            background-color: #9CA3AF;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color var(--transition-speed) ease;
        }

        .slider-bullet.active {
            background-color: var(--text-dark);
        }

        .clientDiv {
            max-width: 25svw;
            transition: transform var(--transition-speed) ease;
        }

        @media (min-width: 768px) {
            .clientDiv {
                width: 10svw;
            }
        }

        .beritaSlider {
            max-height: 50svh;
            scroll-behavior: smooth;
        }

        @media (min-width: 768px) {
            .beritaSlider {
                max-height: 45svh;
            }
        }

        .beritaSlider div {
            width: 45svw;
            padding: 0 2.5svw;
        }

        @media (min-width: 768px) {
            .beritaSlider div {
                width: 20svw;
                padding: 0 2.5svw;
            }
        }

        .coopSlider {
            justify-content: flex-start;
        }

        @media (min-width: 1024px) {
            .coopSlider {
                justify-content: center;
            }
        }

        /* Image hover effects */
        .img-berita {
            transition: transform var(--transition-speed) ease, z-index var(--transition-speed) ease;
        }

        .img-berita img {
            transition: transform var(--transition-speed) ease;
        }

        .img-berita:hover {
            transform: scale(1);
        }

        @media (min-width: 768px) {
            .img-berita:hover {
                transform: scale(1.05);
            }
        }

        /* Different hover effects for different images */
        .img-berita:nth-child(odd):hover .img1 {
            transform: scale(1) rotate(0deg);
        }

        .img-berita:nth-child(even):hover .img1 {
            transform: scale(1) rotate(0deg);
        }

        .img-berita:nth-child(odd):hover .img2 {
            transform: scale(1) rotate(0deg);
        }

        .img-berita:nth-child(even):hover .img2 {
            transform: scale(1) rotate(0deg);
        }

        @media (min-width: 768px) {
            .img-berita:nth-child(odd):hover .img1 {
                transform: scale(1.03) rotate(-3deg);
            }

            .img-berita:nth-child(even):hover .img1 {
                transform: scale(1.03) rotate(3deg);
            }

            .img-berita:nth-child(odd):hover .img2 {
                transform: scale(1.03) rotate(2deg);
            }

            .img-berita:nth-child(even):hover .img2 {
                transform: scale(1.03) rotate(-2deg);
            }
        }

        .beritaSlider {
            min-height: 40svh;
        }

        @media (min-width: 768px) {
            .beritaSlider {
                min-height: 50svh;
            }
        }

        /* Animations */
        @keyframes slideLeftThenBack {
            0% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(-80pt);
            }

            100% {
                transform: translateX(0);
            }
        }

        .animate-left-bounce {
            animation: slideLeftThenBack 1.5s ease-in-out;
        }

        .animate-left-bounce2 {
            animation: slideLeftThenBack 1.7s ease-in-out;
        }

        /* Skip to main content link for accessibility */
        .skip-link {
            position: absolute;
            top: -40px;
            left: 0;
            background: var(--primary-color);
            color: white;
            padding: 8px;
            z-index: 100;
            transition: top 0.3s;
        }

        .skip-link:focus {
            top: 0;
        }

        /* Focus styles for accessibility */
        a:focus,
        button:focus,
        input:focus,
        textarea:focus,
        select:focus {
            outline: 2px solid var(--accent-color);
            outline-offset: 2px;
        }

        /* Loading skeleton */
        .skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeOut {
            from { opacity: 1; transform: translateY(0); }
            to { opacity: 0; transform: translateY(10px); }
        }
    </style>
</head>

<body class="min-w-full min-h-screen">
    <!-- Skip to main content link for accessibility -->
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <header>
        <x-navbar />
    </header>

    <main id="main-content" class="pt-[4.5rem] md:pt-20 w-full">
        <!-- Slider Section -->
        <section aria-labelledby="slider-heading" class="w-full h-[30svh] md:h-[65svh] relative">
            <h2 id="slider-heading" class="sr-only">Promotional Slider</h2>
            <div class="absolute inset-0 flex flex-col justify-center py-2 rounded-md md:items-center">
                <div class="slider flex carousel rounded-md mx-[2.5svw] sm:h-full md:max-h-fit" role="region"
                    aria-roledescription="carousel">
                    @forelse ($banner as $item)
                        <div class="carousel-item aspect-[21/9] md:aspect-auto md:max-h-fit rounded-md" role="group"
                            aria-roledescription="slide">
                            <img src="{{ asset('storage/images/' . $item->img) }}"
                                alt="{{ $item->title ?? 'Promotional banner' }}"
                                class="object-center w-[95svw] h-[25svh] md:h-[55svh] rounded-md object-fill"
                                style="transition: transform 0.5s ease-in-out;" loading="lazy">
                        </div>
                    @empty
                        <div
                            class="carousel-item aspect-[21/9] md:aspect-auto rounded-md flex items-center justify-center">
                            <p class="font-bold text-center text-slate-500">Data kosong</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Hero & About Section -->
        <section class="mx-5 mt-5 overflow-hidden bg-white shadow-lg rounded-2xl md:mx-10">
            <!-- Hero Header -->
            <div
                class="relative px-6 py-8 overflow-hidden bg-gradient-to-r from-lime-600 to-emerald-600 sm:px-8 sm:py-10">
                <!-- Decorative elements -->
                <div class="absolute top-0 right-0 w-64 h-64 -mt-32 -mr-32 bg-white rounded-full opacity-10"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 -mb-24 -ml-24 bg-white rounded-full opacity-10"></div>

                <div class="relative z-10 flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="mb-6 md:mb-0 md:w-2/3">
                        <div class="flex items-center mb-4">
                            <div class="flex items-center justify-center w-12 h-12 mr-4 bg-white rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="w-6 h-6 ri-building-line text-lime-600" fill="currentColor">
                                    <path
                                        d="M21 19H23V21H1V19H3V4C3 3.44772 3.44772 3 4 3H14C14.5523 3 15 3.44772 15 4V19H19V11H17V9H20C20.5523 9 21 9.44772 21 10V19ZM5 5V19H13V5H5ZM7 11H11V13H7V11ZM7 7H11V9H7V7Z">
                                    </path>
                                </svg>
                            </div>
                            <h1 class="text-2xl font-bold text-white md:text-3xl">PT. Surya Amanah Cendekia</h1>
                        </div>
                        <p class="max-w-2xl text-lg text-lime-100 md:text-xl">Solusi terpercaya untuk penyediaan tenaga
                            kerja profesional dengan SDM unggul dan berstandar tinggi.</p>
                    </div>
                    <div class="flex flex-col gap-3 md:w-1/3 md:items-end">
                        <div class="flex flex-col gap-3 sm:flex-row md:flex-col">
                            <a href="{{ route('outsourcing-perusahaan') }}"
                                class="flex items-center px-5 py-3 text-sm font-medium text-white transition-all duration-300 bg-white rounded-lg bg-opacity-20 backdrop-blur-sm hover:bg-opacity-30 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-lime-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3 h-3 mr-2"
                                    fill="currentColor">
                                    <path
                                        d="M7 5V2C7 1.44772 7.44772 1 8 1H16C16.5523 1 17 1.44772 17 2V5H21C21.5523 5 22 5.44772 22 6V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V6C2 5.44772 2.44772 5 3 5H7ZM4 16V19H20V16H4ZM4 14H20V7H4V14ZM9 3V5H15V3H9ZM11 11H13V13H11V11Z">
                                    </path>
                                </svg>
                                Layanan Kami
                            </a>
                            <a href="{{ route('profile-perusahaan') }}"
                                class="flex items-center px-5 py-3 text-sm font-medium transition-all duration-300 bg-white rounded-lg text-lime-800 hover:bg-lime-50 focus:outline-none focus:ring-2 focus:ring-lime-300 focus:ring-offset-2 focus:ring-offset-lime-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3 h-3 mr-2"
                                    fill="currentColor">
                                    <path
                                        d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11 7H13V9H11V7ZM11 11H13V17H11V11Z">
                                    </path>
                                </svg>
                                Tentang Kami
                            </a>
                        </div>
                        <a href="{{ route('aplikasi.index') }}"
                            class="flex items-center px-5 py-3 text-sm font-medium text-white transition-all duration-300 rounded-lg bg-stone-700 hover:bg-stone-600 focus:outline-none focus:ring-2 focus:ring-stone-400 focus:ring-offset-2 focus:ring-offset-lime-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3 h-3 mr-2"
                                fill="currentColor">
                                <path
                                    d="M4 16H20V5H4V16ZM13 18V20H17V22H7V20H11V18H2.9918C2.44405 18 2 17.5511 2 16.9925V4.00748C2 3.45107 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44892 22 4.00748V16.9925C22 17.5489 21.5447 18 21.0082 18H13Z">
                                </path>
                            </svg>
                            System Aplikasi
                        </a>
                    </div>
                </div>
            </div>

            <!-- About Content -->
            <div class="p-6 md:p-8">
                <div class="flex flex-col gap-6 lg:flex-row">
                    <!-- Left side - Icon and Heading -->
                    <div
                        class="flex flex-col items-center justify-center p-6 text-center lg:w-1/4 lg:text-left lg:items-start">
                        <div
                            class="flex items-center justify-center w-20 h-20 mb-5 transition-transform duration-300 shadow-md bg-gradient-to-br from-lime-100 to-emerald-100 rounded-2xl hover:scale-105">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-lime-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h2 id="about-heading" class="text-xl font-bold text-gray-800 lg:text-2xl">Apa itu PT. SAC?
                        </h2>
                        <div class="hidden mt-4 lg:block">
                            <div class="w-16 h-1 rounded-full bg-lime-500"></div>
                        </div>
                    </div>

                    <!-- Right side - Content -->
                    <div class="relative lg:w-3/4">
                        <div class="pl-0 lg:pl-6 lg:border-l-4 lg:border-lime-500">
                            <div id="about-content" class="overflow-y-auto max-h-60 lg:max-h-none">
                                <p class="text-lg leading-relaxed text-gray-700">
                                    <strong class="font-semibold text-lime-600">PT. SAC</strong> berkomitmen menjadi
                                    solusi terpercaya dalam penyediaan tenaga kerja profesional —
                                    mulai dari layanan <em class="font-semibold text-amber-500">cleaning service</em>,
                                    keamanan, hingga pengelolaan sumber daya manusia.
                                    Dengan pengalaman dan dedikasi tinggi, kami senantiasa memberikan pelayanan terbaik
                                    bagi setiap mitra kerja
                                    untuk menciptakan lingkungan yang bersih, aman, dan produktif.
                                </p>
                                <p class="mt-4 text-lg leading-relaxed text-gray-700">
                                    Melalui inovasi serta manajemen berstandar tinggi,
                                    <strong class="font-semibold text-lime-600">PT. SAC</strong> siap mendukung
                                    kebutuhan operasional Anda secara efektif dan efisien.
                                </p>

                                <div class="grid grid-cols-1 gap-4 mt-6 sm:grid-cols-3">
                                    <div class="flex items-center p-4 rounded-lg bg-lime-50">
                                        <div
                                            class="flex items-center justify-center w-10 h-10 mr-3 rounded-lg bg-lime-100">
                                            <i class="text-lime-600 ri-user-star-line"></i>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Profesional</p>
                                            <p class="font-semibold text-gray-800">SDM Unggul</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center p-4 rounded-lg bg-amber-50">
                                        <div
                                            class="flex items-center justify-center w-10 h-10 mr-3 rounded-lg bg-amber-100">
                                            <i class="text-amber-600 ri-shield-check-line"></i>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Terpercaya</p>
                                            <p class="font-semibold text-gray-800">Keamanan Terjamin</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center p-4 rounded-lg bg-emerald-50">
                                        <div
                                            class="flex items-center justify-center w-10 h-10 mr-3 rounded-lg bg-emerald-100">
                                            <i class="text-emerald-600 ri-leaf-line"></i>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Inovatif</p>
                                            <p class="font-semibold text-gray-800">Solusi Modern</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end mt-6">
                                <a href="{{ route('profile-perusahaan') }}"
                                    class="inline-flex items-center px-6 py-3 text-base font-medium text-white transition-all duration-300 rounded-lg shadow-md bg-gradient-to-r from-lime-600 to-emerald-600 hover:from-lime-700 hover:to-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500 hover:shadow-lg">
                                    Pelajari Lebih Lanjut
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Scroll Indicator (Mobile Only) -->
                        <div id="scroll-indicator"
                            class="absolute bottom-[20%] left-0 right-0 flex justify-center pb-2 transition-opacity duration-300 lg:hidden">
                            <button id="scroll-arrow"
                                class="flex items-center justify-center w-12 h-12 transition-all duration-300 bg-white rounded-full shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500"
                                aria-label="Scroll to next section">
                                <i class="text-xl font-semibold text-lime-600 ri-arrow-down-s-line animate-bounce"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tujuan Section -->
        <section aria-labelledby="stats-heading" class="mx-5 mt-5 text-center md:mx-10 md:mt-10">
            <h2 id="stats-heading" class="sr-only">Statistik Perusahaan</h2>
            <div class="pt-5 md:flex md:items-start md:w-full">
                <div class="flex flex-col items-center justify-between gap-4 md:w-1/2">
                    <img src="{{ asset('image/outsourcing.svg') }}" width="250" alt="Outsourcing illustration"
                        loading="lazy">
                    <div class="flex flex-col items-center justify-end">
                        <p class="text-2xl font-black capitalize text-lime-600">{{ $userCount }}±</p>
                        <p class="text-lg font-bold capitalize">Outsourcing</p>
                        <p class="text-lg font-semibold capitalize">( Cleaning Service, Security, etc )</p>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-between gap-4 md:w-1/2">
                    <img src="{{ asset('image/mitra.svg') }}" width="250" alt="Partnership illustration"
                        loading="lazy">
                    <div class="flex flex-col items-center justify-end">
                        <p class="text-2xl font-black capitalize text-lime-600">23</p>
                        <p class="text-lg font-bold capitalize">Mitra</p>
                        <p class="text-lg font-semibold capitalize">( Rumah Sakit, Sekolah, Etc )</p>
                    </div>
                </div>
            </div>

            <!-- Job Vacancies Section -->
            <div class="m-5 mt-8 overflow-hidden bg-white shadow-lg rounded-xl md:m-10">
                <!-- Header Section -->
                <div class="relative px-4 py-5 bg-gradient-to-r from-lime-600 to-emerald-600 sm:px-6 sm:py-6">
                    <!-- Decorative elements -->
                    <div class="absolute top-0 right-0 w-64 h-64 -mb-32 -mr-32 bg-white rounded-full opacity-10"></div>
                    <div class="absolute bottom-0 left-0 w-48 h-48 -mt-24 -ml-24 bg-white rounded-full opacity-10"></div>

                    <div class="flex flex-col justify-between sm:flex-row sm:items-center">
                        <div>
                            <h3 class="flex items-center text-xl font-bold text-white sm:text-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-2">
                                    <path d="M7 5V2C7 1.44772 7.44772 1 8 1H16C16.5523 1 17 1.44772 17 2V5H21C21.5523 5 22 5.44772 22 6V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V6C2 5.44772 2.44772 5 3 5H7ZM4 16V19H20V16H4ZM4 14H20V7H4V14ZM9 3V5H15V3H9ZM11 11H13V13H11V11Z"></path>
                                </svg>
                                Lowongan Pekerjaan Tersedia
                            </h3>
                            <p class="mt-1 text-sm text-lime-100 sm:text-base">Bergabunglah bersama tim profesional kami</p>
                        </div>
                        <div class="mt-3 sm:mt-0">
                            <span class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-white bg-white rounded-full bg-opacity-20">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-1.5">
                                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                                </svg>
                                Update: {{ $lastLoker ? $lastLoker->created_at->format('d M Y') : 'Never' }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Job Listings Section -->
                <div class="p-4 sm:p-6">
                    @forelse ($loker as $index => $lok)
                    <!-- Location Section -->
                    <div class="mb-8 location-section {{ $loop->index >= 2 ? 'hidden' : '' }}" data-location-index="{{ $loop->index }}">
                        <!-- Location Header -->
                        <div class="flex items-center mb-4">
                            <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-full bg-amber-100">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-amber-600">
                                    <path d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13Z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-gray-900 capitalize">{{ $index }}</h4>
                                <p class="text-sm text-gray-500 capitalize">{{ $lok[0]->province }}</p>
                            </div>
                        </div>

                        <!-- Jobs Grid -->
                        <div class="flex items-center gap-4 overflow-x-auto">
                            @foreach ($lok as $job)
                            <!-- Job Card -->
                            <div class="flex flex-col min-w-full min-h-full overflow-hidden transition-all duration-500 transform border border-gray-200 rounded-lg shadow-sm group hover:shadow-xl hover:-translate-y-2">
                                <!-- Portrait Image Container -->
                                <div class="relative flex-shrink-0 overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200 aspect-[3/4]">
                                    <img class="inset-0 object-cover transition-transform duration-700 group-hover:scale-110"
                                        src="{{ asset('storage') . '/' . $job->img }}"
                                        alt="{{ $job->position }}">

                                    <!-- Status Badge Overlay -->
                                    <div class="absolute transition-all duration-300 transform top-3 right-3 group-hover:scale-110">
                                        @if($job->is_active)
                                        <span class="inline-flex items-center px-3 py-1 text-xs font-medium text-white bg-green-500 rounded-full shadow-lg backdrop-blur-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mr-1">
                                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                            </svg>
                                            Tersedia
                                        </span>
                                        @else
                                        <span class="inline-flex items-center px-3 py-1 text-xs font-medium text-white bg-red-500 rounded-full shadow-lg backdrop-blur-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mr-1">
                                                <path fill-rule="evenodd" d="M5.47 5.47a.75>.75 0 011.06 0L12 10.94l5.47-5.47a.75>.75 0 111.06 1.06L13.06 12l5.47 5.47a.75>.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75>.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75>.75 0 010-1.06z" clip-rule="evenodd" />
                                            </svg>
                                            Tidak Tersedia
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Job Details -->
                                <div class="flex flex-col flex-1 p-4 bg-white">
                                    <div class="flex-1">
                                        <h4 class="text-lg font-semibold text-gray-900 transition-colors duration-300 group-hover:text-lime-600">{{ $job->position }}</h4>

                                        <!-- Job Description -->
                                        <p class="mt-2 text-sm text-gray-600 transition-colors duration-300 line-clamp-2 group-hover:text-gray-700">{{ $job->description }}</p>
                                    </div>

                                    <!-- Action Button -->
                                    <div class="mt-4">
                                        <button
                                            class="detail-button w-full py-2.5 px-4 text-sm font-medium text-white bg-gradient-to-r from-lime-600 to-emerald-600 rounded-md shadow-sm hover:from-lime-700 hover:to-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg"
                                            data-job-id="{{ $job->id }}"
                                            data-job-position="{{ $job->position }}"
                                            data-job-description="{{ $job->description }}"
                                            data-job-status="{{ $job->is_active ? 'Tersedia' : 'Tidak Tersedia' }}"
                                            data-job-image="{{ asset('storage') . '/' . $job->img }}"
                                            data-job-location="{{ $index }}, {{ $job->province }}">
                                            Lihat Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @empty
                    <!-- Empty State -->
                    <div class="py-12 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16 mx-auto text-gray-400">
                            <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.392-.462-7.814-1.309C3.034 14.072 2.25 12.941 2.25 11.738v-3.03c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75>.75 0 100-1.5.75>.75 0 000 1.5z" clip-rule="evenodd" />
                            <path d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.323a4.3 4.3 0 00.713-.31v2.796c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427s-4.357-.145-6.477-.427C4.047 21.128 3 19.852 3 18.4z" />
                        </svg>
                        <p class="mt-4 text-lg font-medium text-gray-700">Tidak ada lowongan pekerjaan tersedia saat ini</p>
                        <p class="mt-1 text-gray-500">Silakan periksa kembali di lain waktu</p>
                    </div>
                    @endforelse

                    <!-- Show more/less buttons -->
                    <div class="mt-8 text-center {{ count($loker) <= 2 ? 'hidden' : '' }}">
                        <button id="show-more-btn" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-white rounded-md shadow-sm bg-gradient-to-r from-lime-600 to-emerald-600 hover:from-lime-700 hover:to-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                                <path d="M13.0001 16.1716L18.3641 10.8076L19.7783 12.2218L12.0001 20L4.22192 12.2218L5.63614 10.8076L11.0001 16.1716V4H13.0001V16.1716Z"></path>
                            </svg>
                            Tampilkan Lebih Banyak Lokasi
                        </button>
                    </div>

                    <div id="view-all-section" class="hidden mt-8 text-center">
                        <button id="show-less-btn" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500 transition-all duration-300 transform hover:scale-105 hover:shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                                <path d="M13.0001 7.82843V20H11.0001V7.82843L5.63614 13.1924L4.22192 11.7782L12.0001 4L19.7783 11.7782L18.3641 13.1924L13.0001 7.82843Z"></path>
                            </svg>
                            Tampilkan Lebih Sedikit
                        </button>
                    </div>
                </div>
            </div>

            <!-- Job Detail Modal -->
            <div id="jobModal" class="fixed inset-0 z-[900] hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <!-- Background overlay -->
                <div class="fixed inset-0 transition-opacity duration-300 ease-in-out opacity-0 bg-gray-900/50 backdrop-blur-md" id="modal-backdrop" aria-hidden="true"></div>

                <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                    <!-- This element is to trick the browser into centering the modal contents. -->
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                    <!-- Modal content with transition -->
                    <div class="inline-block w-full overflow-hidden text-left transition-all duration-300 ease-in-out transform translate-y-4 bg-white rounded-lg shadow-2xl opacity-0 sm:my-8 sm:max-w-3xl sm:w-full" id="modal-content">
                        <!-- Modal body -->
                        <div class="bg-white">
                            <!-- Job image section -->
                            <div class="relative bg-gray-100 h-[63vh] sm:h-[70vh] pt-4">
                                <img id="modal-image" src="" alt="" class="object-contain w-full h-full rounded-sm cursor-pointer">
                            </div>

                            <!-- Job details section -->
                            <div class="p-4 sm:p-6">
                                <div class="space-y-4">
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 sm:text-2xl" id="modal-position"></h3>
                                        <div class="flex items-center mt-1 text-sm text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-1.5">
                                                <path d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13Z"></path>
                                            </svg>
                                            <span id="modal-location"></span>
                                        </div>
                                    </div>

                                    <div class="p-4 overflow-y-auto rounded-lg bg-gray-50 max-h-60">
                                        <h4 class="mb-2 text-sm font-medium text-gray-700">Deskripsi Pekerjaan</h4>
                                        <p class="text-gray-600" id="modal-description"></p>
                                    </div>

                                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                                        <span id="modal-status" class="flex items-center justify-center px-3 py-1 text-xs font-medium rounded-full"></span>
                                        <button id="modal-close-footer-btn" type="button" class="w-full px-6 py-2 text-sm font-medium text-white transition-all duration-300 transform border border-transparent rounded-md shadow-sm sm:w-auto bg-gradient-to-r from-lime-600 to-emerald-600 hover:from-lime-700 hover:to-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500 hover:scale-105 hover:shadow-md">
                                            Tutup
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Berita Terkini Section -->
        <section aria-labelledby="news-heading" class="mt-5 div-news">
            <div class="mx-5 my-5">
                <h2 id="news-heading" class="text-base font-bold text-center">
                    <i class="font-semibold ri-subtract-line text-amber-500"></i>
                    <i class="font-semibold ri-subtract-line text-amber-500"></i>
                    Berita Terkini
                    <i class="font-semibold ri-subtract-line text-amber-500"></i>
                    <i class="font-semibold ri-subtract-line text-amber-500"></i>
                </h2>
            </div>
            <div class="flex flex-col w-full md:flex-row">
                @if ($video->count() > 0)
                    @php
                        function convertToEmbedUrl($url)
                        {
                            $embed = '';
                            if (strpos($url, 'youtu.be/') !== false) {
                                $embed = str_replace('youtu.be/', 'www.youtube.com/embed/', $url);
                            } elseif (strpos($url, 'watch?v=') !== false) {
                                $embed = str_replace('watch?v=', 'embed/', $url);
                            } else {
                                $embed = $url; // fallback
                            }

                            // Tambahkan ?rel=0 jika belum ada query param, jika sudah pakai &
                            if (strpos($embed, '?') === false) {
                                $embed .= '?rel=0';
                            } else {
                                $embed .= '&rel=0';
                            }

                            return $embed;
                        }
                    @endphp
                    <div class="relative overflow-y-hidden bg-lime-600 w-full md:w-[40%] min-h-[220pt] md:h-auto rounded-b-md md:rounded-r-md md:rounded-bl-none flex overflow-x-scroll carousel"
                        role="region" aria-roledescription="carousel">
                        <!-- Decorative elements -->
                        <div class="absolute top-0 right-0 w-64 h-64 -mt-32 -mr-32 bg-white rounded-full opacity-10">
                        </div>
                        <div class="absolute bottom-0 left-0 w-48 h-48 -mb-24 -ml-24 bg-white rounded-full opacity-10">
                        </div>
                        @forelse ($video as $vid)
                            <div class="static z-10 flex flex-col items-center justify-start w-full pt-2 overflow-y-hidden transition-all duration-300 ease-in-out carousel-item vidDiv"
                                role="group" aria-roledescription="slide">
                                <div
                                    class="flex flex-col justify-center items-center w-full max-w-[23rem] md:max-w-[26rem] p-2 overflow-y-hidden">
                                    <iframe class="w-full rounded-md aspect-video"
                                        src="{{ convertToEmbedUrl($vid->video_path) }}{{ $loop->first ? '&autoplay=1' : '' }}"
                                        loading="lazy" title="{{ $vid->title }}"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen aria-label="Video: {{ $vid->title }}"></iframe>
                                </div>
                                <div class="px-2 text-center">
                                    <p class="font-semibold text-white capitalize md:text-xl">{{ $vid->title }}</p>
                                    <p class="text-xs font-semibold text-white capitalize md:text-sm">
                                        {{ $vid->description }}</p>
                                </div>
                            </div>
                        @empty
                            <div class="flex flex-col items-center justify-start w-full pt-2 transition-all duration-300 ease-in-out carousel-item vidDiv"
                                role="group" aria-roledescription="slide">
                                <div
                                    class="flex flex-col justify-center items-center w-full max-w-[23rem] md:max-w-[26rem] p-2">
                                    <div class="w-full rounded-md skeleton aspect-video"></div>
                                </div>
                                <div class="text-center">
                                    <p class="font-semibold text-white capitalize md:text-xl">-</p>
                                    <p class="text-xs font-semibold text-white capitalize md:text-sm">-</p>
                                </div>
                            </div>
                        @endforelse
                    </div>
                @endif
                <div class="beritaSlider w-full {{ $video ? 'md:w-[60%]' : '' }} relative z-[90] pt-[3vh] overflow-x-scroll overflow-y-hidden carousel rounded-md aspect-video"
                    role="region" aria-roledescription="carousel">
                    @forelse ($artikel as $art)
                        <div class="font-medium transition-all duration-300 ease-in-out carousel-item img-berita"
                            role="group" aria-roledescription="slide">
                            <a href="{{ route('artikel', $art->id) }}" class="flex flex-col"
                                aria-label="Baca artikel: {{ $art->title }}">
                                <div class="relative flex justify-center items-start h-[65pt] md:h-[110pt]">
                                    <img src="{{ asset('storage/images/' . $art->img) }}" alt="{{ $art->title }}"
                                        loading="lazy"
                                        srcset="{{ asset('storage/images/' . $art->img) }}"
                                        sizes="(max-width: 600px) 100vw, 50vw"
                                        class="rounded-md object-cover aspect-video absolute z-[3] img1">
                                    <img src="{{ asset('storage/images/' . $art->img) }}" alt=""
                                        loading="lazy"
                                        srcset="{{ asset('storage/images/' . $art->img) }}"
                                        sizes="(max-width: 600px) 100vw, 50vw"
                                        class="rounded-md object-cover aspect-video absolute z-[2] opacity-45 blur-[2px] img2"
                                        aria-hidden="true">
                                </div>
                                <p class="pt-4 text-sm font-semibold md:text-base text-slate-400">
                                    <time
                                        datetime="{{ $art->created_at->format('Y-m-d') }}">{{ $art->created_at->format('Y-m-d') }}</time>
                                </p>
                                <p class="text-sm capitalize md:text-base line-clamp-3">{{ $art->title }}</p>
                            </a>
                        </div>
                    @empty
                        <div class="font-medium transition-all duration-300 ease-in-out carousel-item">
                            <div class="flex flex-col">
                                <div class="relative flex justify-center items-start h-[65pt] md:h-[110pt]">
                                    <div class="w-full rounded-md skeleton aspect-video"></div>
                                </div>
                                <p class="pt-4 text-sm font-semibold md:text-base text-slate-400">-</p>
                                <p class="text-sm capitalize md:text-base line-clamp-3">Tidak ada artikel tersedia</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Peta Section -->
        <section aria-labelledby="map-heading" class="m-5">
            <h2 id="map-heading" class="mb-2 text-xl font-bold text-center capitalize">Lokasi Mitra PT. SAC</h2>
            <div
                class="flex justify-center rounded-lg outline-4 outline-dashed outline-amber-500 drop-shadow-md outline-offset-2 bg-gradient-to-bl from-stone-700 via-stone-600 to-stone-500">
                <div class="relative w-full p-1">
                    <div id="map" class="min-h-[200px] lg:min-h-[400px] bg-transparent" role="application"
                        aria-label="Peta lokasi mitra PT. SAC"></div>
                </div>
            </div>
        </section>

        <!-- Client Section -->
        <section aria-labelledby="clients-heading" class="my-5">
            <div class="mx-5 my-5">
                <h2 id="clients-heading" class="text-base font-bold text-center">
                    <i class="font-semibold ri-subtract-line text-amber-500"></i>
                    <i class="font-semibold ri-subtract-line text-amber-500"></i>
                    Klien Kami
                    <i class="font-semibold ri-subtract-line text-amber-500"></i>
                    <i class="font-semibold ri-subtract-line text-amber-500"></i>
                </h2>
            </div>
            <div class="clientSlider w-full carousel transition-all duration-300 ease-in-out px-[2.5svw]"
                style="height: 100%; max-height: 32svh;" id="scrollContainer" role="region"
                aria-roledescription="carousel">
                @forelse ($client as $cli)
                    <div class="flex flex-col justify-around clientDiv carousel-item aspect-square px-[4svw] md:px-[0.5svw] transition-all duration-300 ease-in-out"
                        style="gap: 1rem;" role="group" aria-roledescription="slide">
                        <span class="flex items-center justify-center">
                            <img src="{{ asset('storage/images/' . $cli->img) }}" width="100"
                                class="object-cover rounded-md" alt="{{ $cli->name }} logo" loading="lazy">
                        </span>
                        <p class="text-xs font-semibold text-center">{{ $cli->name }}</p>
                    </div>
                @empty
                    <div class="flex flex-col justify-around clientDiv carousel-item aspect-square px-[4svw] md:px-[0.5svw] transition-all duration-300 ease-in-out"
                        style="gap: 1rem;" role="group" aria-roledescription="slide">
                        <span class="flex items-center justify-center">
                            <div class="w-24 h-24 rounded-md skeleton"></div>
                        </span>
                        <p class="text-xs font-semibold text-center">-</p>
                    </div>
                @endforelse
            </div>
        </section>

        <!-- Testimonial Section -->
        <section aria-labelledby="testimonials-heading" class="mt-5">
            <div class="mx-5 my-5">
                <h2 id="testimonials-heading" class="text-base font-bold text-center">
                    <i class="font-semibold ri-subtract-line text-amber-500"></i>
                    Testimonial Pengguna Jasa
                    <i class="font-semibold ri-subtract-line text-amber-500"></i>
                </h2>
            </div>
            <div class="w-full carousel testiSlider" style="font-style: italic;" role="region"
                aria-roledescription="carousel">
                <div class="carousel-item flex flex-col gap-2 text-center items-center whitespace-pre-line w-[90svw] px-[5svw] transition-all duration-300 ease-in-out"
                    role="group" aria-roledescription="slide">
                    <blockquote>
                        <p>"Pelayanan bagus, cepat dan rapi. Pakaian karyawan juga semua rapi rapi recommended banget"
                        </p>
                        <footer class="font-semibold">- Pengguna Jasa PT. SAC Ponorogo -</footer>
                    </blockquote>
                </div>
                <div class="carousel-item flex flex-col gap-2 text-center items-center whitespace-pre-line w-[90svw] px-[5svw] transition-all duration-300 ease-in-out"
                    role="group" aria-roledescription="slide">
                    <blockquote>
                        <p>"Aplikasi absensi dan pelaporan dari karyawan sangat inovatif, bukan hanya itu absensi
                            menggunakan lokasi serta pelaporan menggunakan barcode scan"</p>
                        <footer class="font-semibold">- Pengguna Jasa PT. SAC Ponorogo -</footer>
                    </blockquote>
                </div>
                <div class="carousel-item flex flex-col gap-2 text-center items-center whitespace-pre-line w-[90svw] px-[5svw] transition-all duration-300 ease-in-out"
                    role="group" aria-roledescription="slide">
                    <blockquote>
                        <p>"Cukup satu kata luar biasa, bisa sat set segala hal bersih, rapi Satpam juga sigap, bisa
                            diandalkan"</p>
                        <footer class="font-semibold">- Pengguna Jasa PT. SAC Ponorogo -</footer>
                    </blockquote>
                </div>
            </div>
        </section>
    </main>

    <footer class="mt-10">
        <x-footer />
    </footer>

    <script>
        // Initialize all functionality when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            // Show more/less functionality
            const showMoreBtn = document.getElementById('show-more-btn');
            const showLessBtn = document.getElementById('show-less-btn');
            const viewAllSection = document.getElementById('view-all-section');
            const hiddenSections = document.querySelectorAll('.location-section.hidden');
            const jobModal = document.getElementById('jobModal');

            if (showMoreBtn) {
                showMoreBtn.addEventListener('click', function() {
                    hiddenSections.forEach(section => {
                        section.classList.remove('hidden');
                        // Add animation for smoother appearance
                        setTimeout(() => {
                            section.style.opacity = '1';
                            section.style.transform = 'translateY(0)';
                        }, 10);
                    });
                    jobModal.classList.remove('hidden');
                    showMoreBtn.parentElement.classList.add('hidden');
                    // viewAllSection.classList.remove('hidden');

                    // Smooth scroll to the first newly revealed section
                    const firstHiddenSection = document.querySelector('.location-section[data-location-index="2"]');
                    if (firstHiddenSection) {
                        firstHiddenSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            }

            if (showLessBtn) {
                showLessBtn.addEventListener('click', function() {
                    hiddenSections.forEach(section => {
                        // Add animation for smoother disappearance
                        section.style.opacity = '0';
                        section.style.transform = 'translateY(-10px)';

                        setTimeout(() => {
                            section.classList.add('hidden');
                        }, 300);
                    });
                    showMoreBtn.parentElement.classList.remove('hidden');
                    viewAllSection.classList.add('hidden');

                    // Smooth scroll to the top of job listings
                    const jobListingsSection = document.querySelector('.p-4.sm\\:p-6');
                    if (jobListingsSection) {
                        jobListingsSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            }

            hiddenSections.forEach(section => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(-10px)';
                section.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
            });

            // Modal functionality
            const detailButtons = document.querySelectorAll('.detail-button');
            const modal = document.getElementById('jobModal');
            const modalBackdrop = document.getElementById('modal-backdrop');
            const modalContent = document.getElementById('modal-content');
            const modalCloseFooterBtn = document.getElementById('modal-close-footer-btn');
            const modalImage = document.getElementById('modal-image');

            // Function to close modal
            function closeModal() {
                modalBackdrop.classList.remove('opacity-100');
                modalBackdrop.classList.add('opacity-0');
                modalContent.classList.remove('opacity-100', 'translate-y-0');
                modalContent.classList.add('opacity-0', 'translate-y-4');

                setTimeout(() => {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }, 300);
            }

            // Function to open modal
            function openModal(button) {
                // Get data attributes from the button
                const position = button.getAttribute('data-job-position');
                const description = button.getAttribute('data-job-description');
                const status = button.getAttribute('data-job-status');
                const image = button.getAttribute('data-job-image');
                const location = button.getAttribute('data-job-location');

                // Set modal content
                document.getElementById('modal-position').textContent = position;
                document.getElementById('modal-description').textContent = description;
                modalImage.src = image;
                modalImage.alt = position;
                document.getElementById('modal-location').textContent = location;

                // Set status badge
                const statusBadge = document.getElementById('modal-status');
                if (status === 'Tersedia') {
                    // statusBadge.className = 'bg-green-100 text-green-800';
                    statusBadge.style.background = 'oklch(96.2% 0.044 156.743)';
                    statusBadge.style.color = 'oklch(44.8% 0.119 151.328)';
                    statusBadge.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mr-1">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                        </svg>
                        Tersedia
                    `;
                } else {
                    // statusBadge.className = 'bg-red-100 text-red-800';
                    statusBadge.style.background = 'oklch(93.6% 0.032 17.717)';
                    statusBadge.style.color = 'oklch(44.4% 0.177 26.899)';
                    statusBadge.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 mr-1">
                            <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75>.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                        </svg>
                        Tidak Tersedia
                    `;
                }

                // Show modal with animation
                modal.classList.remove('hidden');
                setTimeout(() => {
                    modalBackdrop.classList.remove('opacity-0');
                    modalBackdrop.classList.add('opacity-100');
                    modalContent.classList.remove('opacity-0', 'translate-y-4');
                    modalContent.classList.add('opacity-100', 'translate-y-0');
                }, 10);

                // document.body.style.overflow = 'hidden';
            }

            // Attach event listeners to detail buttons
            detailButtons.forEach(button => {
                button.addEventListener('click', function() {
                    openModal(this);
                });
            });

            // Attach event listeners to close buttons
            modalCloseFooterBtn.addEventListener('click', closeModal);

            // Close modal when clicking outside
            modalBackdrop.addEventListener('click', function(e) {
                if (e.target === modalBackdrop) {
                    closeModal();
                }
            });

            // Close modal with Escape key
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });

            // Scroll indicator functionality
            const aboutContent = document.getElementById('about-content');
            const scrollIndicator = document.getElementById('scroll-indicator');
            const scrollArrow = document.getElementById('scroll-arrow');

            // Function to handle scroll indicator visibility
            function handleScrollIndicator() {
                if (!aboutContent || !scrollIndicator) return;

                // Only show on mobile where content might scroll
                if (window.innerWidth < 1024) {
                    const scrollHeight = aboutContent.scrollHeight;
                    const clientHeight = aboutContent.clientHeight;

                    // Only show indicator if content is scrollable
                    if (scrollHeight > clientHeight) {
                        scrollIndicator.style.opacity = '1';
                        scrollIndicator.style.pointerEvents = 'auto';
                    } else {
                        scrollIndicator.style.opacity = '0';
                        scrollIndicator.style.pointerEvents = 'none';
                    }
                } else {
                    // Hide on larger screens
                    scrollIndicator.style.opacity = '0';
                    scrollIndicator.style.pointerEvents = 'none';
                }
            }

            // Function to handle fade effect on scroll
            function handleScrollFade() {
                if (!aboutContent || !scrollIndicator) return;

                if (window.innerWidth < 1024) {
                    const scrollHeight = aboutContent.scrollHeight;
                    const scrollTop = aboutContent.scrollTop;
                    const clientHeight = aboutContent.clientHeight;

                    // Calculate how far the user has scrolled (0 to 1)
                    const scrollPercentage = scrollTop / (scrollHeight - clientHeight);

                    // Start fading when user has scrolled 70% of the way
                    const fadeStartPoint = 0.7;

                    if (scrollPercentage >= fadeStartPoint) {
                        // Calculate opacity (1 to 0)
                        const opacity = 1 - ((scrollPercentage - fadeStartPoint) / (1 - fadeStartPoint));
                        scrollIndicator.style.opacity = Math.max(0, opacity);
                    } else {
                        scrollIndicator.style.opacity = '1';
                    }
                }
            }

            // Add event listeners
            if (aboutContent) {
                aboutContent.addEventListener('scroll', handleScrollFade);
            }

            // Handle scroll arrow click
            if (scrollArrow) {
                scrollArrow.addEventListener('click', function() {
                    // Find the current section
                    const currentSection = document.querySelector('[aria-labelledby="about-heading"]');

                    // Find the next section
                    const nextSection = currentSection.nextElementSibling;

                    if (nextSection) {
                        // Smooth scroll to the next section
                        nextSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            }

            // Initial checks
            handleScrollIndicator();
            handleScrollFade();

            // Handle window resize
            window.addEventListener('resize', function() {
                handleScrollIndicator();
                handleScrollFade();
            });

            // Add loading animation for images and videos
            const items = document.querySelectorAll('.img-berita');
            const vid = document.querySelectorAll('.vidDiv');

            // Intersection Observer for animations
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (entry.target.classList.contains('img-berita')) {
                            // Check if this is one of the first two articles
                            const index = Array.from(items).indexOf(entry.target);
                            if (index < 2) {
                                entry.target.classList.add('animate-left-bounce');
                            }
                        } else if (entry.target.classList.contains('vidDiv')) {
                            // Check if this is the first video
                            const index = Array.from(vid).indexOf(entry.target);
                            if (index === 0) {
                                entry.target.classList.add('animate-left-bounce2');
                            }
                        }
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            items.forEach(item => {
                observer.observe(item);
            });

            vid.forEach(item => {
                observer.observe(item);
            });
        });

        // Optimized jQuery document ready
        $(function() {
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

            // Only proceed if slider elements exist
            if (slides.length > 0) {
                // Pagination click handlers
                $('#prevPost').on('click', function() {
                    if (cPost > 0) {
                        cPost--;
                        $('#currentPost').text(cPost);
                        updateSliderTransform(beritaSlider, cPost, -100);
                    }
                });

                $('#nextPost').on('click', function() {
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
            }
        });
    </script>

    <script>
        // Initialize map when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            let centerMap = [-2, 118]; // default Indonesia
            let zoomMap = 5; // default zoom

            // Check if device is mobile or tablet
            if (window.innerWidth <= 1024) {
                centerMap = [-7.25, 111.75]; // center of Java (around Madiun)
            }

            // Create flat map (no basemap)
            var map = L.map('map', {
                center: centerMap,
                zoom: zoomMap,
                preferCanvas: true,
                zoomControl: false,
                attributionControl: false,
                dragging: true,
                scrollWheelZoom: false,
                doubleClickZoom: false,
                boxZoom: false,
                keyboard: false,
                touchZoom: false
            });

            // Create custom panes for layering
            map.createPane("polygons");
            map.getPane("polygons").style.zIndex = 400;

            map.createPane("labels");
            map.getPane("labels").style.zIndex = 650;

            // Load GeoJSON with error handling
            fetch("geojson/indonesia-province-simple.json")
                .then(res => {
                    if (!res.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return res.json();
                })
                .then(data => {
                    L.geoJSON(data, {
                        style: feature => {
                            let highlighted = ["JAWA BARAT", "JAWA TENGAH", "JAWA TIMUR"];
                            let name = feature.properties.Propinsi.toUpperCase();
                            return {
                                color: "#888",
                                weight: 1,
                                fillColor: highlighted.includes(name) ? "#65A30D" : "#d0c2aa",
                                fillOpacity: 1
                            };
                        }
                    }).addTo(map);
                })
                .catch(error => {
                    console.error('Error loading GeoJSON:', error);
                    // Fallback: show a simple map or error message
                    const mapElement = document.getElementById('map');
                    if (mapElement) {
                        mapElement.innerHTML =
                            '<div class="flex items-center justify-center h-full text-white">Map data could not be loaded</div>';
                    }
                });

            function addCityLabel(city) {
                let cityLatLng = city.coords;
                let cityPoint = map.latLngToLayerPoint(cityLatLng);

                let offsetX = city.offset[0];
                let offsetY = city.offset[1];

                // Label dimensions
                let labelWidth = 80;
                let labelHeight = 20;

                // Label position
                let labelPoint = L.point(cityPoint.x + offsetX, cityPoint.y + offsetY);
                let labelLatLng = map.layerPointToLatLng(labelPoint);

                // Line end position
                let position = city.linePos || "middle";
                let endPoint;
                if (position === "top") {
                    endPoint = L.point(labelPoint.x + labelWidth / 2, labelPoint.y - 4);
                } else if (position === "bottom") {
                    endPoint = L.point(labelPoint.x + labelWidth / 2, labelPoint.y + labelHeight - 9);
                } else {
                    endPoint = L.point(labelPoint.x + labelWidth / 2, labelPoint.y + labelHeight / 2);
                }
                let endLatLng = map.layerPointToLatLng(endPoint);

                // Polyline path
                let linePoints = [cityLatLng];

                // Max 3 sides
                let sides = Math.min(city.sides || 3, 3);

                if (sides === 1) {
                    linePoints.push(endLatLng);
                } else if (sides === 2) {
                    let cornerPoint = L.point(cityPoint.x, (cityPoint.y + endPoint.y) / 2);
                    let cornerLatLng = map.layerPointToLatLng(cornerPoint);
                    linePoints.push(cornerLatLng, endLatLng);
                } else {
                    let corner1Point = L.point(cityPoint.x, cityPoint.y + offsetY / 2);
                    let corner1LatLng = map.layerPointToLatLng(corner1Point);

                    let corner2Point = L.point(endPoint.x, corner1Point.y);
                    let corner2LatLng = map.layerPointToLatLng(corner2Point);

                    linePoints.push(corner1LatLng, corner2LatLng, endLatLng);
                }

                // Create line
                L.polyline(linePoints, {
                    color: "white",
                    weight: 2.5,
                    opacity: 1,
                    pane: "labels"
                }).addTo(map);

                // City point
                L.circleMarker(cityLatLng, {
                    radius: 2,
                    color: "white",
                    fillColor: "white",
                    fillOpacity: 1,
                    pane: "labels"
                }).addTo(map);

                // Label marker
                L.marker(labelLatLng, {
                    icon: L.divIcon({
                        className: "city-label",
                        html: `<div class="label-box" style="width:${labelWidth}px; height:${labelHeight}px; text-align:center;">
                            <span style="font-size:10px; font-weight:bold; color:white;">${city.name}</span>
                        </div>`
                    }),
                    pane: "labels"
                }).addTo(map);
            }

            // City labels with better placement
            var cities = [{
                    name: "Surabaya",
                    coords: [-7.258924, 112.753533],
                    offset: [50, -40],
                    sides: 3,
                    linePos: "bottom"
                },
                {
                    name: "Lamongan",
                    coords: [-7.117927, 112.413758],
                    offset: [-40, -40],
                    sides: 1,
                    linePos: "bottom"
                },
                {
                    name: "Kediri",
                    coords: [-7.847516, 112.016525],
                    offset: [20, 40],
                    sides: 3,
                    linePos: "top"
                },
                {
                    name: "Madiun",
                    coords: [-7.631761, 111.530968],
                    offset: [-60, 30],
                    sides: 3,
                    linePos: "top"
                },
                {
                    name: "Ponorogo",
                    coords: [-7.866419, 111.466472],
                    offset: [-40, 40],
                    sides: 1,
                    linePos: "top"
                },
                {
                    name: "Sidoarjo",
                    coords: [-7.452835378661048, 112.70376565138675],
                    offset: [40, -10],
                    sides: 2,
                    linePos: "bottom"
                },
                {
                    name: "Nganjuk",
                    coords: [-7.604310481417298, 111.89876863507381],
                    offset: [-110, 20],
                    sides: 3,
                    linePos: "top"
                },
                {
                    name: "Gresik",
                    coords: [-7.164749293098419, 112.65087619920911],
                    offset: [90, -20],
                    sides: 3,
                    linePos: "bottom"
                }
            ];

            cities.forEach(addCityLabel);
        });
    </script>
</body>

</html>
