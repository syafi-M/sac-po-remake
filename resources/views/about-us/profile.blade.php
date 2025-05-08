<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Pelajari lebih lanjut tentang visi, misi, dan tim profesional di balik PT. Surya Amanah Cendikia, penyedia layanan SDM dan outsourcing terpercaya di Ponorogo." />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <title>Profile Perusahaan Kami - PT. Surya Amanah Cendikia Ponorogo</title>
</head>
<body class=" min-w-full min-h-screen">
    <div>
        <x-navbar />
    </div>
    <div class="mt-20 mx-5 md:mx-10">
        <div class="drop-shadow-md aspect-[21/9] md:aspect-auto">
            {{-- <img src="https://placehold.co/2100x900" class="object-cover " alt="" srcset=""> --}}
            <img src="{{ asset('image/bannerProfile.jpeg.jpg') }}" class="object-cover object-center w-[95svw] h-[35svh] md:h-[55svh] block rounded-md" alt="" srcset="">
        </div>
        <div>
            <div class="mx-5 md:mx-10 mt-10 ">
                <p class="text-sm text-center md:text-base font-semibold"><i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i> Tentang Kami <i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div class="">
                <p class="text-center">PT. Surya Amanah Cendikia merupakan perusahaan yang bergerak di bidang jasa outsourcing, kami senantiasa</p>
                {{-- <div class="pt-10 space-y-2 md:grid md:grid-cols-3 justify-center">
                    <span class="flex flex-col items-center justify-center text-center gap-2 text-gray-600">
                        <i class="ri-service-line text-4xl"></i>
                        <p class="font-semibold">Responsible</p>
                        <p>memberikan pelayanan secara berkesinambungan dan penuh tanggung jawab untuk memberikan kepuasan terhadap klien melalui pola kemitraan.</p>
                    </span>
                    <span class="flex flex-col items-center justify-center text-center gap-2 text-gray-600">
                        <i class="ri-user-smile-line text-4xl"></i>
                        <p class="font-semibold">Euthusiasm</p>
                        <p>Memberikan pelayanan dan bekerja dengan penuh antusias tanpa membedakan golongan, suku, bangsa, dan agama.</p>
                    </span>
                    <span class="flex flex-col items-center justify-center text-center gap-2 text-gray-600">
                        <i class="ri-share-line text-4xl"></i>
                        <p class="font-semibold">Share</p>
                        <p>Selalu memberikan informasi terkini sehingga “Commitment to Excellent” (Pelayanan Prima) akan selalu tercapai.</p>
                    </span>
                    <span class="flex flex-col items-center justify-center text-center gap-2 text-gray-600">
                        <i class="ri-settings-4-line text-4xl"></i>
                        <p class="font-semibold">Principle</p>
                        <p>Menjunjung tinggi nilai- nilai kejujuran, disiplin, dan tanggung jawab pada setiap pekerjaan yang dipercayakan.</p>
                    </span>
                    <span class="flex flex-col items-center justify-center text-center gap-2 text-gray-600">
                        <i class="ri-sparkling-2-line text-4xl"></i>
                        <p class="font-semibold">Excellent</p>
                        <p>Melakukan yang terbaik di segala bidang pelayanan jasa, melaksanakan pelayanan dengan sikap professional.</p>
                    </span>
                    <span class="flex flex-col items-center justify-center text-center gap-2 text-gray-600">
                        <i class="ri-shake-hands-line text-4xl"></i>
                        <p class="font-semibold">Commitment</p>
                        <p>Pekerjaan akan selalu dilaksanakan dengan komitmen yang berprinsip pada Pelayanan Prima (Service Excellent).</p>
                    </span>
                    <span class="flex flex-col items-center justify-center text-center gap-2 text-gray-600 md:col-span-3">
                        <i class="ri-admin-line text-4xl"></i>
                        <p class="font-semibold">Trust</p>
                        <p class="md:w-1/3">Menjunjung nilai kepercayaan yang telah diberikan oleh mitra kerja, menerapkan prinsip “Good Governance of Product”.</p>
                    </span>
                </div> --}}
                <div class="mx-5 md:mx-10 md:flex ">
                    <div class="md:w-1/2 mt-5">
                        <div class="flex justify-center"><i class="ri-service-fill text-9xl text-lime-600"></i></div>
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
                        <div class="flex justify-center"><i class="ri-eraser-fill text-9xl text-lime-600"></i></div>
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
            </div>
            <div class="mx-5 md:mx-10 mt-10 ">
                <p class="text-sm text-center  md:text-base font-semibold"><i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i> Organisasi Kelembagaan <i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i></p>
            </div>
            <div class="bg-gradient-to-bl p-2 rounded-md from-lime-600 via-lime-500 to-lime-400 mx-[5%] md:mx-[25%] flex justify-center">
                <table class="text-sm font-semibold text-slate-700" style="	user-select: none;" dragable="false">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>: PT. Surya Amanah Cendikia Ponorogo</td>
                        </tr>
                        <tr>
                            <td>SK Kemekumham</td>
                            <td>: NO AHU-0077560.AH.01.02. TAHUN 2020</td>
                        </tr>
                        <tr>
                            <td>Akte Notaris</td>
                            <td>: DIYAN NURYANTI., SE, S.H.,M.Kn No.20 TANGGAL 27 OKTOBER 2020</td>
                        </tr>
                        <tr>
                            <td>KBLI</td>
                            <td>: 81210, 85499, 47111, 80100</td>
                        </tr>
                        <tr>
                            <td>NIB</td>
                            <td>: 1268000210096</td>
                        </tr>
                        <tr>
                            <td>NPWP</td>
                            <td>: 72.116.499.4-647.000</td>
                        </tr>
                        <tr>
                            <td>Rekening Bank</td>
                            <td>: BNI NOMOR 0730996939</td>
                        </tr>
                        <tr>
                            <td>Komisaris Utama</td>
                            <td>: Drs. H. Zainun Shofwan, M.SI.</td>
                        </tr>
                        <tr>
                            <td>Komisaris</td>
                            <td>: Drs. H. Sunarto, M.SI.</td>
                        </tr>
                        <tr>
                            <td>Direktur Utama</td>
                            <td>: Dr. H. Sultan, M.SI.</td>
                        </tr>
                        <tr>
                            <td>Direktur</td>
                            <td>: H. Sayid Abas, SE.,M.SI</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="w-full md:flex gap-2 ">
                <div class="md:w-1/2">
                    <div class="mx-5 md:mx-10 mt-10 mb-5 ">
                        <p class="text-base text-center md:text-base font-bold"><i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i> Visi <i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i></p>
                    </div>
                    <div>
                        <p><i class="ri-subtract-line font-semibold text-amber-500"></i> Diakui sebagai perusahaan penyedia jasa dengan Sumber Daya Manusia (SDM) yang unggul dan berwawasan saling menguntungkan.</p>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="mx-5 md:mx-10 mt-10 mb-5 ">
                        <p class="text-base text-center md:text-base font-bold"><i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i> Misi <i class="ri-subtract-line font-semibold text-amber-500"></i><i class="ri-subtract-line font-semibold text-amber-500"></i></p>
                    </div>
                    <div>
                        <p><i class="ri-subtract-line font-semibold text-amber-500"></i> Terwujudnya harkat dan martabat serta moral yang baik bagi tenaga kerja.</p>
                        <p><i class="ri-subtract-line font-semibold text-amber-500"></i> Terwujudnya Sumber Daya Manusia yang berkualitas.</p>
                        <p><i class="ri-subtract-line font-semibold text-amber-500"></i> Meningkatkan profesionalisme tenaga kerja.</p>
                        <p><i class="ri-subtract-line font-semibold text-amber-500"></i> Membentuk tenaga kerja yang inisiatif, inovatif dan kreatif yang tinggi.</p>
                        <p><i class="ri-subtract-line font-semibold text-amber-500"></i> Membentuk kualitas Sumber Daya Manusia secara efektif dan efisien.</p>
                        <p><i class="ri-subtract-line font-semibold text-amber-500"></i> Mengarahkan pekerjaan pada kepuasan pelanggan. </p>
                        <p><i class="ri-subtract-line font-semibold text-amber-500"></i> Memberikan pelayanan kepada perusahaan dan masyarakat secara maksimal serta menjadi pioneer dalam kegiatan penempatan dan pengelolaan tenaga kerja yang professional.</p>
                        <p><i class="ri-subtract-line font-semibold text-amber-500"></i> Menjalin kemitraan yang baik adalah tujuan utama kami kedepan untuk kerjasama jangka panjang (long term) di semua bidang usaha, untuk lebih meningkatkan kemampuan dan pelayanan kami sesuai kebutuhan perusahaan dan pelayanan kami sesuai kebutuhan perusahaan dan tuntutan zaman.  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <x-footer/>
    </div>
</body>
</html>