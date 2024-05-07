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
        <div class="aspect-[21/9] md:aspect-auto drop-shadow-md">
            <img src="https://placehold.co/2100x900"  class="object-cover object-center w-[95svw] h-[35svh] md:h-[55svh] block rounded-md" alt="" srcset="">
        </div>
        <div>
            <div class="mx-5 md:mx-10 mt-10 ">
                <p class="text-sm text-center  md:text-base font-semibold"><i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i> Portofolio Perusahaan <i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div>
                <p class="text-center font-bold text-lg md:text-2xl">Sertifikat Cleaner Oleh BNSP RI</p>
                <div class="flex flex-col gap-4 items-center md:grid md:grid-cols-2 md:justify-center">
                    @for ($i = 1; $i < 7; $i++)
                        <div>
                            <img src="{{ asset('image/Sertif'.$i.'.png') }}" class="p-[10%]" alt="img{{ $i }}" srcset="">
                        </div>
                    @endfor
                </div>
                <div class="my-5">
                    <p class="text-center font-bold text-lg md:text-2xl py-2">Company Profile</p>
                    <div class="flex justify-center">
                        <iframe src="https://drive.google.com/file/d/1aJ762P6x0l02MjS6YizyNJm_nJgNdV0b/preview" width="640" height="480" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="flex justify-center w-full">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.0182775528302!2d111.49565863476913!3d-7.864434353328986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79a0344c1b4c3b%3A0xf83e671b9428f103!2sJl.%20Budi%20Utomo%20No.10%2C%20Ronowijayan%2C%20Kec.%20Siman%2C%20Kabupaten%20Ponorogo%2C%20Jawa%20Timur%2063471!5e0!3m2!1sid!2sid!4v1714805475453!5m2!1sid!2sid" width="640" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-lg"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <x-footer/>
    </div>
</body>
</html>