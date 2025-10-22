<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Jelajahi portofolio proyek kami yang mencakup layanan outsourcing, pengembangan SDM, dan pelatihan yang telah sukses dilaksanakan bersama mitra kami." />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <title>Portofolio Kami - PT. Surya Amanah Cendekia</title>
</head>

<body class="min-w-full min-h-screen ">
    <div>
        <x-navbar />
    </div>
    <div class="mx-5 mt-20 md:mt-28 md:mx-10">
        <div class="aspect-[21/9] md:aspect-auto drop-shadow-md">
            <img src="{{ asset('image/bannerProfile.jpeg.jpg') }}"
                class="object-cover object-center w-[95svw] h-[30svh] md:h-[55svh] block rounded-md" alt=""
                srcset="">
        </div>
        <div>
            <div class="mx-5 mt-10 md:mx-10 ">
                <p class="text-sm font-semibold text-center md:text-base"><i
                        class="font-semibold ri-subtract-line text-amber-500"></i><i
                        class="font-semibold ri-subtract-line text-amber-500"></i> Portofolio Perusahaan <i
                        class="font-semibold ri-subtract-line text-amber-500"></i><i
                        class="font-semibold ri-subtract-line text-amber-500"></i></p>
            </div>
            <div>
                <p class="text-lg font-bold text-center md:text-2xl">Sertifikat Cleaner Oleh BNSP RI</p>
                <div class="flex flex-col items-center gap-2 md:gap-4 md:grid md:grid-cols-2 md:justify-center">
                    @for ($i = 1; $i < 7; $i++)
                        <div class="relative flex justify-center w-full">
                            <!-- Certificate Image -->
                            <img src="{{ asset('image/Sertif' . $i . '.png') }}" alt="img{{ $i }}"
                                class="p-[10%] select-none pointer-events-none w-[250pt] sm:w-[265pt] md:w-[350pt] h-auto" oncontextmenu="return false;"
                                draggable="false">

                            <!-- Transparent overlay to block interaction -->
                            <div class="absolute inset-0"></div>

                            <!-- Watermark -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span
                                    class="text-gray-500 text-3xl md:text-5xl text-center font-bold opacity-30 select-none pointer-events-none rotate-[-25deg]">
                                    © PT. Surya Amanah Cendekia
                                </span>
                            </div>
                        </div>
                    @endfor
                </div>

                <div class="my-5">
                    <p class="py-2 text-lg font-bold text-center md:text-2xl">Company Profile</p>
                    <div class="flex justify-center">
                        <iframe src="https://drive.google.com/file/d/1Ea2SRcKb-j9io9ITikJK85etiksQkRpq/preview"
                            class="w-[540pt] sm:w-[400pt] h-[350pt] sm:h-[510pt]" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="flex justify-center w-full">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.0182775528302!2d111.49565863476913!3d-7.864434353328986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79a0344c1b4c3b%3A0xf83e671b9428f103!2sJl.%20Budi%20Utomo%20No.10%2C%20Ronowijayan%2C%20Kec.%20Siman%2C%20Kabupaten%20Ponorogo%2C%20Jawa%20Timur%2063471!5e0!3m2!1sid!2sid!4v1714805475453!5m2!1sid!2sid"
                        width="640" style="border:0;" class="h-[240px] sm:h-[240px] md:h-[280px]" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-lg"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <x-footer />
    </div>
</body>

</html>
