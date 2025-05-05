<footer class="bg-zinc-800 py-5 md:px-10 px-2">
    <div class="flex flex-col gap-2 items-center">
        <img src="{{ asset('image/sac.png') }}" width="50" alt="" srcset="">
        <p class="text-white font-bold">PT. Surya Amanah Cendikia</p>
    </div>
    <div class="font-semibold text-white my-5 ">
        <div class="md:flex justify-between">
            <div class="flex flex-col gap-1">
                <p class="text-amber-500">Tentang SAC</p>
                <a href="{{ route('profile-perusahaan') }}">Tentang Kami</a>
                <p href="{{ route('outsourcing-perusahaan') }}">Layanan Kami</p>
            </div>
            <div class="flex flex-col gap-1 mt-5 md:mt-0">
                <p class="text-amber-500">Layanan</p>
                <a href="{{ route('outsourcing-perusahaan') }}">Outsourcing</a>
                <p href="https://umroh.sac-po.com/">Umroh</p>
            </div>
            <div class="flex flex-col gap-1 mt-5 md:mt-0">
                <p class="text-amber-500">Alamat</p>
                <p class="max-w-md">Jl. Budi Utomo No. 10, Ronowijayan, Kec. Ponorogo, Kabupaten Ponorogo, Jawa Timur, 63471</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.01827770063656!2d111.49569324152903!3d-7.864434105128663!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79a1002f52f2b7%3A0x2c28fdd7da55d127!2sPT.%20SURYA%20AMANAH%20CENDIKIA%20PONOROGO!5e0!3m2!1sid!2sid!4v1724203297397!5m2!1sid!2sid" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-lg"></iframe>
            </div>
        </div>
        <div class="md:flex md:flex-row-reverse md:justify-around md:items-end">
            <div class="flex flex-col gap-1 mt-5 md:mt-0">
                <p>Copyright {{ Carbon\Carbon::now()->year }} <a href="{{ route('/') }}" class="text-amber-500">PT. Surya Amanah Cendikia</a> All Right Reserved</p>
                
            </div>
            <div class="flex flex-col gap-1 mt-5 md:mt-0">
                <p>Follow us: </p>
                <div class="flex flex-col gap-2">
                    <a href="https://www.instagram.com/ptsacponorogo/" class="flex items-center gap-2">
                        <p><i class="ri-instagram-line bg-white font-medium text-zinc-700 p-1 rounded-full text-xl"></i></p>
                        <p> @ptsacponorogo</p>
                    </a>
                    <a href="https://wa.me/6282134360007" class="flex items-center gap-2">
                        <p class="bg-white font-medium text-zinc-700 p-1 px-2 rounded-full text-xl"><i class="ri-phone-line "></i> / <i class="ri-whatsapp-line"></i></p>
                        <p> +62 821-3436-0007</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>