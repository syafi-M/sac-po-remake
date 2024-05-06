{{-- Navbar --}}
@php
    $currentRoute = request()->route()->getName();
@endphp
<div class="fixed z-10 w-full top-0">
    <div class="bg-white py-4 px-4 drop-shadow-lg flex justify-between items-center">
        <div class="flex gap-2 items-center">
            <img src="{{ asset('image/sac.png') }}" width="35" alt="logo sac" srcset="">
            <p class="font-bold text-xs">PT. Surya Amanah Cendikia</p>
        </div>
        <div class="hidden md:flex items-center">
            <a href="/" class="py-2 px-4 text-lg font-bold rounded-md {{ $currentRoute == '/' ? "bg-lime-600 text-slate-50" : "" }}">Beranda</a>
            <div class="dropdown dropdown-hover">
                <div tabindex="0" role="button" class="menu-title rounded-md text-slate-700 m-1 {{ in_array($currentRoute, ['profile-perusahaan', 'portofolio-perusahaan', 'client-perusahaan', 'galeri-perusahaan', 'profile-company-perusahaan']) ? "bg-lime-600 text-slate-50" : "" }}">Tentang Kami</div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                    <li class="{{ $currentRoute == 'profile-perusahaan' ? "border-b-2 border-lime-600 border-solid" : "" }}"><a href="{{ route('profile-perusahaan') }}">Profile</a></li>
                    <li class="{{ $currentRoute == 'client-perusahaan' ? "border-b-2 border-lime-600 border-solid" : "" }}"><a href="{{ route('client-perusahaan') }}">Mitra Kerjasama</a></li>
                    <li class="{{ $currentRoute == 'portofolio-perusahaan' ? "border-b-2 border-lime-600 border-solid" : "" }}"><a href="{{ route('portofolio-perusahaan') }}">Portofolio</a></li>
                    <li class="{{ $currentRoute == 'galeri-perusahaan' ? "border-b-2 border-lime-600 border-solid" : "" }}"><a href="{{ route('galeri-perusahaan') }}">Galeri</a></li>
                    <li class="{{ $currentRoute == 'company-profile-perusahaan' ? "border-b-2 border-lime-600 border-solid" : "" }}"><a href="{{ route('company-profile-perusahaan') }}">Lihat Company Profile</a></li>
                </ul>
            </div>
            <div class="dropdown dropdown-hover dropdown-end">
                <div tabindex="0" role="button" class="menu-title rounded-md text-slate-700 m-1 {{ $currentRoute == 'outsourcing-perusahaan' ? "bg-lime-600 text-slate-50" : "" }}">Layanan</div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                    <li class="{{ $currentRoute == 'outsourcing-perusahaan' ? "border-b-2 border-lime-600 border-solid" : "" }}"><a href="{{ route('outsourcing-perusahaan') }}">Outsourcing</a></li>
                    <li><a href="https://umroh.sac-po.com/">Agen Umroh</a></li>
                </ul>
            </div>
            <a href="{{ route('kontak-perusahaan') }}" class="menu-title rounded-md text-slate-700 {{ $currentRoute == 'kontak-perusahaan' ? "bg-lime-600 text-slate-50" : "" }}">Kontak</a>
        </div>
    </div>
    <div class="absolute z-30 top-5 right-[5vw] md:hidden">
        <label class="swap swap-rotate">
            <input type="checkbox" class="hidden" id="sidebarToggle">
            <i id="menu-icon" class="ri-menu-3-line text-lg swap-off fill-current"></i>
            <i id="menu-icon" class="ri-menu-3-line ri-close-large-line swap-on fill-current"></i>
        </label>
    </div>
    {{-- sidebar --}}
    <div id="sidebar"
        class="absolute right-[-100%] z-10 top-0 ml-[25%] transition-all duration-300 ease-in-out rounded-md drop-shadow-lg bg-white">
        <div class="py-10 px-5">
            <div class="mt-5">
                <a href="/" class="py-2 px-4 text-lg font-bold bg-lime-600 rounded-md text-slate-50">Beranda</a>
            </div>
            <div class="my-4">
                <ul class="menu rounded-box">
                    <li>
                        <h2 class="menu-title text-black">Tentang Kami</h2>
                        <ul>
                            <li><a href="{{ route('profile-perusahaan') }}">Profile</a></li>
                    <li><a href="{{ route('client-perusahaan') }}">Mitra Kerjasama</a></li>
                    <li><a href="{{ route('portofolio-perusahaan') }}">Portofolio</a></li>
                    <li><a href="{{ route('galeri-perusahaan') }}">Galeri</a></li>
                    <li><a href="{{ route('company-profile-perusahaan') }}">Lihat Company Profile</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="my-4">
                <ul class="menu rounded-box">
                    <li>
                        <h2 class="menu-title text-black">Layanan</h2>
                        <ul>
                            <li><a href="{{ route('outsourcing-perusahaan') }}">Outsourcing</a></li>
                            <li><a href="https://umroh.sac-po.com/">Agen Umroh</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="my-4">
                <ul class="menu rounded-box">
                    <li>
                        <a href="{{ route('kontak-perusahaan') }}" class="menu-title text-slate-700">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
    var isOpen = false;
    $(document).ready(function() {
        $('#sidebarToggle').click(function() {
            isOpen = !isOpen;
            if (isOpen) {
                $('body').addClass('overflow-hidden');
                $('#sidebar').removeClass('right-[-100%]').addClass('right-[0%]');
            } else {
                $('body').removeClass('overflow-hidden');
                $('#sidebar').addClass('right-[-100%]').removeClass('right-[0%]');
            }
        })
    })
</script>