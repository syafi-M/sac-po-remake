<footer class="px-4 py-8 text-white bg-gradient-to-br from-zinc-800 to-zinc-900 md:py-12 md:px-10">
    <div class="max-w-6xl mx-auto">
        <!-- Company Info Section -->
        <div class="flex flex-col items-center mb-8 text-center">
            <div class="p-3 mb-4 bg-white rounded-full">
                <img src="{{ asset('image/sac.png') }}" width="50" alt="PT. Surya Amanah Cendekia Logo" class="w-12 h-12">
            </div>
            <h3 class="text-xl font-bold text-white md:text-2xl">PT. Surya Amanah Cendekia</h3>
            <p class="mt-2 text-amber-400">Solusi Outsourcing Terpercaya di Indonesia</p>
        </div>

        <!-- Footer Content Grid -->
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
            <!-- About Column -->
            <div>
                <h4 class="flex items-center mb-4 text-lg font-semibold text-amber-500">
                    <i class="mr-2 ri-building-line"></i> Tentang SAC
                </h4>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('profile-perusahaan') }}" class="flex items-center transition-colors duration-300 hover:text-amber-400">
                            <i class="mr-1 ri-arrow-right-s-line text-amber-500"></i> Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('outsourcing-perusahaan') }}" class="flex items-center transition-colors duration-300 hover:text-amber-400">
                            <i class="mr-1 ri-arrow-right-s-line text-amber-500"></i> Layanan Kami
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Services Column -->
            <div>
                <h4 class="flex items-center mb-4 text-lg font-semibold text-amber-500">
                    <i class="mr-2 ri-briefcase-line"></i> Layanan
                </h4>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('outsourcing-perusahaan') }}" class="flex items-center transition-colors duration-300 hover:text-amber-400">
                            <i class="mr-1 ri-arrow-right-s-line text-amber-500"></i> Outsourcing
                        </a>
                    </li>
                    <li>
                        <a href="https://umroh.sac-po.com/" class="flex items-center transition-colors duration-300 hover:text-amber-400">
                            <i class="mr-1 ri-arrow-right-s-line text-amber-500"></i> Umroh
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Address Column -->
            <div>
                <h4 class="flex items-center mb-4 text-lg font-semibold text-amber-500">
                    <i class="mr-2 ri-map-pin-line"></i> Alamat
                </h4>
                <p class="mb-4 text-zinc-300">
                    Jl. Budi Utomo No. 10, Ronowijayan, Kec. Ponorogo, Kabupaten Ponorogo, Jawa Timur, 63471
                </p>
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.01827770063656!2d111.49569324152903!3d-7.864434105128663!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79a1002f52f2b7%3A0x2c28fdd7da55d127!2sPT.%20SURYA%20AMANAH%20CENDEKIA%20PONOROGO!5e0!3m2!1sid!2sid!4v1724203297397!5m2!1sid!2sid"
                        width="100%"
                        height="150"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="PT. Surya Amanah Cendekia Location">
                    </iframe>
                </div>
            </div>

            <!-- Contact & Social Column -->
            <div>
                <h4 class="flex items-center mb-4 text-lg font-semibold text-amber-500">
                    <i class="mr-2 ri-contacts-line"></i> Hubungi Kami
                </h4>
                <div class="space-y-4">
                    <div>
                        <p class="mb-2 text-zinc-300">Follow us:</p>
                        <div class="flex flex-col space-y-3">
                            <a href="https://www.instagram.com/ptsacponorogo/" class="flex items-center gap-3 transition-colors duration-300 hover:text-amber-400">
                                <div class="flex items-center justify-center w-10 h-10 bg-white rounded-full">
                                    <i class="text-xl ri-instagram-line text-zinc-700"></i>
                                </div>
                                <span>@ptsacponorogo</span>
                            </a>
                            <a href="https://wa.me/6282134360007" class="flex items-center gap-3 transition-colors duration-300 hover:text-amber-400">
                                <div class="flex items-center justify-center w-10 h-10 bg-white rounded-full">
                                    <i class="text-xl ri-whatsapp-line text-zinc-700"></i>
                                </div>
                                <span>+62 821-3436-0007</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="pt-6 mt-10 border-t border-zinc-700">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <p class="mb-4 text-sm text-zinc-400 md:mb-0">
                    Copyright {{ Carbon\Carbon::now()->year }} <a href="{{ route('/') }}" class="transition-colors duration-300 text-amber-500 hover:text-amber-400">PT. Surya Amanah Cendekia</a> All Right Reserved
                </p>
                <div class="flex space-x-4">
                    <a href="{{ route('profile-perusahaan') }}" class="transition-colors duration-300 text-zinc-400 hover:text-amber-400">
                        Privacy Policy
                    </a>
                    <a href="{{ route('profile-perusahaan') }}" class="transition-colors duration-300 text-zinc-400 hover:text-amber-400">
                        Terms of Service
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
