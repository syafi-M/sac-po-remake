<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Pelajari lebih lanjut tentang visi, misi, dan tim profesional di balik PT. Surya Amanah Cendikia, penyedia layanan SDM dan outsourcing terpercaya di Ponorogo." />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <title>Profile Perusahaan Kami - PT. Surya Amanah Cendekia</title>
</head>

<body class="min-w-full min-h-screen ">
    <div>
        <x-navbar />
    </div>
    <div class="mx-5 mt-20 md:mt-28 md:mx-10">
        <div class="drop-shadow-md aspect-[21/9] md:aspect-auto">
            {{-- <img src="https://placehold.co/2100x900" class="object-cover " alt="" srcset=""> --}}
            <img src="{{ asset('image/bannerProfile.jpeg.jpg') }}"
                class="object-cover object-center w-[95svw] h-[30svh] md:h-[55svh] block rounded-md" alt=""
                srcset="">
        </div>
        <div>
            <div class="mx-5 mt-10 md:mx-10 ">
                <p class="text-sm font-semibold text-center md:text-base"><i
                        class="font-semibold ri-subtract-line text-amber-500"></i><i
                        class="font-semibold ri-subtract-line text-amber-500"></i> Tentang Kami <i
                        class="font-semibold ri-subtract-line text-amber-500"></i><i
                        class="font-semibold ri-subtract-line text-amber-500"></i></p>
            </div>
            <div class="">
                <div
                    class="max-w-3xl p-5 mx-auto space-y-2 text-justify border-2 border-dashed rounded-md text-pretty border-amber-500">
                    <p class="indent-8">PT. Surya Amanah Cendekia (SAC) adalah perusahaan jasa alih daya (outsourcing)
                        yang fokus pada penyediaan jasa Cleaning Service, Security Guard (Satpam), dan
                        penyedia Sumber Daya Manusia pendukung lainnya.</p>
                    <p class="indent-8">Didirikan berdasarkan Akta No. 10 Tanggal 7 Mei 2014, Notaris Sutomo S.H dan
                        telah
                        disahkan oleh Kemenkumham sesuai SK. No. AHU-08278.40.10.2014.</p>
                    <p class="indent-8">PT SAC telah dipercaya berbagai instansi pemerintah, perusahaan swasta,
                        perbankan, lembaga pendidikan, rumah sakit, hingga perumahan, untuk menghadirkan
                        tenaga kerja yang profesional, disiplin, dan berintegritas tinggi.</p>
                    <p class="indent-8">Dengan mengedepankan Profesionalisme, Integritas, dan Kepuasan pelanggan,
                        kami siap menjadi solusi bagi perusahaan dan atau instansi Anda dalam menjaga
                        lingkungan kerja yang bersih, nyaman, dan aman. Melalui dukungan total dari kami,
                        Anda sebagai mitra. dapat lebih fokus dalam pengembangan bisnis
                        utamanya secara efektif dan efisien sehingga perusahaan dapat
                        berkembang dengan cepat, optimal serta berkelanjutan.</p>
                </div>

                <div class="mx-5 md:mx-10 md:flex ">
                    <div class="mt-5 md:w-1/2">
                        <div class="flex justify-center"><i class="ri-service-fill text-9xl text-lime-600"></i></div>
                        <p class="text-xl font-bold text-center">SIGAP</p>
                        <div class="flex items-center justify-center pt-4">
                            <ul class="text-lg font-semibold">
                                <li><i class="font-semibold ri-subtract-line text-amber-500"></i> Siaga</li>
                                <li><i class="font-semibold ri-subtract-line text-amber-500"></i> Inisiatif</li>
                                <li><i class="font-semibold ri-subtract-line text-amber-500"></i> Gesit</li>
                                <li><i class="font-semibold ri-subtract-line text-amber-500"></i> Amanah</li>
                                <li><i class="font-semibold ri-subtract-line text-amber-500"></i> Peduli</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-5 md:w-1/2">
                        <div class="flex justify-center"><i class="ri-eraser-fill text-9xl text-lime-600"></i></div>
                        <p class="text-xl font-bold text-center">RESIK</p>
                        <div class="flex items-center justify-center pt-4">
                            <ul class="text-lg font-semibold">
                                <li><i class="font-semibold ri-subtract-line text-amber-500"></i> Ramah</li>
                                <li><i class="font-semibold ri-subtract-line text-amber-500"></i> Empati</li>
                                <li><i class="font-semibold ri-subtract-line text-amber-500"></i> Salam & Sapa</li>
                                <li><i class="font-semibold ri-subtract-line text-amber-500"></i> Integritas</li>
                                <li><i class="font-semibold ri-subtract-line text-amber-500"></i> Komitmen</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-5 mt-10 md:mx-10 ">
                <p class="text-sm font-semibold text-center md:text-base"><i
                        class="font-semibold ri-subtract-line text-amber-500"></i><i
                        class="font-semibold ri-subtract-line text-amber-500"></i> Organisasi Kelembagaan <i
                        class="font-semibold ri-subtract-line text-amber-500"></i><i
                        class="font-semibold ri-subtract-line text-amber-500"></i></p>
            </div>
            <div
                class="bg-gradient-to-bl p-1 rounded-lg from-lime-600 via-lime-500 to-lime-400 mx-auto w-full md:w-[500px] flex justify-center">
                <table class="w-full text-sm font-semibold bg-white rounded-md text-neutral-700"
                    style="user-select: none;" dragable="false">
                    <tbody>
                        <tr>
                            <td class="p-2">Nama</td>
                            <td>: PT. Surya Amanah Cendekia</td>
                        </tr>
                        <tr>
                            <td class="p-2">Akta Pendirian</td>
                            <td>: Sutomo S.H No. 10 7 Mei 2014</td>
                        </tr>
                        <tr>
                            <td class="p-2">SK Kemenkumham</td>
                            <td>: AHU-0182478.AH.01.11.TAHUN 2025</td>
                        </tr>
                        <tr>
                            <td class="p-2">KBLI</td>
                            <td>: 81210,47599,78300,80100,79122</td>
                        </tr>
                        <tr>
                            <td class="p-2">NIB</td>
                            <td>: 1268000210096</td>
                        </tr>
                        <tr>
                            <td class="p-2">NPWP</td>
                            <td>: 72.116.499.4-647.000</td>
                        </tr>
                        <tr>
                            <td class="p-2">Rekening Bank</td>
                            <td>: BNI 0730996939</td>
                        </tr>
                        <tr>
                            <td class="p-2">Komisaris Utama</td>
                            <td>: Ir. Slamet Riyadi,ST., M.Sc., Ph.D</td>
                        </tr>
                        <tr>
                            <td class="p-2">Komisaris</td>
                            <td>: Drs. Muh. Syafrudin, M.A.</td>
                        </tr>
                        <tr>
                            <td class="p-2">Direktur Utama</td>
                            <td>: Dr. Ir. Agus Edi Sumanto, MM., M.Si</td>
                        </tr>
                        <tr>
                            <td class="p-2">Direktur</td>
                            <td>: H. Sayid Abas, M.Si</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="w-full gap-2 md:flex ">
                <div class="md:w-1/2">
                    <div class="mx-5 mt-10 mb-5 md:mx-10 ">
                        <p class="text-base font-bold text-center md:text-base"><i
                                class="font-semibold ri-subtract-line text-amber-500"></i><i
                                class="font-semibold ri-subtract-line text-amber-500"></i> Visi <i
                                class="font-semibold ri-subtract-line text-amber-500"></i><i
                                class="font-semibold ri-subtract-line text-amber-500"></i></p>
                    </div>
                    <div>
                        <p class="text-center">“Menjadi perusahaan penyedia
                            jasa tenaga kerja yang profesional,
                            terpercaya, dan unggul di bidang kebersihan serta keamanan di Indonesia.”</p>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="mx-5 mt-10 mb-5 md:mx-10 ">
                        <p class="text-base font-bold text-center md:text-base"><i
                                class="font-semibold ri-subtract-line text-amber-500"></i><i
                                class="font-semibold ri-subtract-line text-amber-500"></i> Misi <i
                                class="font-semibold ri-subtract-line text-amber-500"></i><i
                                class="font-semibold ri-subtract-line text-amber-500"></i></p>
                    </div>
                    <div class="text-center md:text-justify">
                        <p><i class="ri-circle-fill text-[8px] font-semibold text-amber-500"></i> Menyediakan tenaga
                            kerja
                            yang
                            terlatih, bersertifikat, dan berintegritas.</p>
                        <p><i class="ri-circle-fill text-[8px] font-semibold text-amber-500"></i> Mengembangkan sistem
                            manajemen
                            SDM berbasis teknologi modern.</p>
                        <p><i class="ri-circle-fill text-[8px] font-semibold text-amber-500"></i> Memberikan pelayanan
                            yang
                            efektif, efisien, dan berorientasi pada
                            kepuasan pelanggan.</p>
                        <p><i class="ri-circle-fill text-[8px] font-semibold text-amber-500"></i> Membangun kerjasama
                            jangka
                            panjang dengan mitra bisnis melalui
                            layanan yang berkualitas.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <x-footer />
    </div>
</body>

</html>
