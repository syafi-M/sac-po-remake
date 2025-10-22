<!-- Laravel Blade Dashboard - Redesigned -->
<!-- Add this to your blade file, maintaining all variables and routes -->

<x-app-layout>
    <div class="w-full px-4 py-8 mx-auto mt-20 sm:px-6 lg:px-8 max-w-9xl">

        <!-- Welcome Banner - Redesigned -->
        <div class="relative p-8 mb-8 overflow-hidden rounded-lg shadow-xl bg-gradient-to-r from-indigo-600 via-indigo-500 to-purple-600">
            <div class="absolute top-0 right-0 hidden mr-16 -mt-4 pointer-events-none xl:block opacity-20">
                <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <path id="welcome-a" d="M64 0l64 128-64-20-64 20z" />
                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                            <stop stop-color="#A5B4FC" offset="0%" />
                            <stop stop-color="#818CF8" offset="100%" />
                        </linearGradient>
                    </defs>
                    <g fill="url(#welcome-b)" fill-rule="evenodd">
                        <g transform="rotate(64 36.592 105.604)">
                            <use xlink:href="#welcome-a" />
                        </g>
                    </g>
                </svg>
            </div>

            <div class="relative z-10 flex flex-col justify-between gap-6 sm:flex-row sm:items-center">
                <div>
                    <h1 class="mb-2 text-3xl font-bold text-white md:text-4xl">Welcome Back, {{ Auth::user()->name }}! 👋</h1>
                    <p class="text-lg text-indigo-100">Here's an overview of your content and activity</p>
                </div>
                <form action="{{ route('logout') }}" method="post" class="flex-shrink-0">
                    @csrf
                    @method('POST')
                    <button type="submit" class="inline-flex items-center gap-2 px-6 py-3 font-semibold text-indigo-600 transition-all duration-300 transform bg-white rounded-lg shadow-lg hover:bg-indigo-50 hover:shadow-xl hover:scale-105">
                        <i class="text-xl ri-logout-box-r-line"></i>
                        <span>Sign Out</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Dashboard Grid -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

            <!-- Articles Card -->
            <div class="relative overflow-hidden transition-all duration-300 bg-white border border-gray-100 shadow-md group rounded-xl hover:shadow-xl hover:border-indigo-200">
                <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-indigo-500 to-indigo-600"></div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Artikel</h3>
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full {{ $postCount == 0 ? 'bg-red-100' : 'bg-indigo-100' }}">
                            <span class="text-2xl font-bold {{ $postCount == 0 ? 'text-red-600' : 'text-indigo-600' }}">{{ $postCount }}</span>
                        </span>
                    </div>
                    @if($post != null)
                        <div class="p-3 mb-4 border border-indigo-200 rounded-lg bg-gradient-to-r from-indigo-50 to-purple-50">
                            <p class="mb-1 text-sm text-gray-600">Latest Article:</p>
                            <p class="font-medium text-gray-800 line-clamp-2">{{ $post->title }}</p>
                        </div>
                    @else
                        <div class="p-3 mb-4 border border-gray-200 rounded-lg bg-gray-50">
                            <p class="text-sm text-gray-500">No articles yet</p>
                        </div>
                    @endif
                    <div class="flex gap-2">
                        <a href="{{ route('post.create') }}" class="inline-flex items-center justify-center flex-1 gap-2 px-4 py-2 text-sm font-medium text-white transition-colors bg-green-500 rounded-lg hover:bg-green-600">
                            <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor">
                                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                            </svg>
                            Add
                        </a>
                        <a href="{{ route('post.index') }}" class="inline-flex items-center justify-center flex-1 gap-2 px-4 py-2 text-sm font-medium text-white transition-colors bg-indigo-500 rounded-lg hover:bg-indigo-600">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12 2 6.47715 6.47715 2 12 2 17.5228 2 22 6.47715 22 12 22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12 20 7.58172 16.4183 4 12 4 7.58172 4 4 7.58172 4 12 4 16.4183 7.58172 20 12 20ZM13 10.5V15H14V17H10V15H11V12.5H10V10.5H13ZM13.5 8C13.5 8.82843 12.8284 9.5 12 9.5 11.1716 9.5 10.5 8.82843 10.5 8 10.5 7.17157 11.1716 6.5 12 6.5 12.8284 6.5 13.5 7.17157 13.5 8Z"></path></svg>
                            View
                        </a>
                    </div>
                </div>
            </div>

            <!-- Videos Card -->
            <div class="relative overflow-hidden transition-all duration-300 bg-white border border-gray-100 shadow-md group rounded-xl hover:shadow-xl hover:border-indigo-200">
                <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-red-500 to-red-600"></div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Video</h3>
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full {{ $videoCount == 0 ? 'bg-red-100' : 'bg-red-100' }}">
                            <span class="text-2xl font-bold {{ $videoCount == 0 ? 'text-red-600' : 'text-red-600' }}">{{ $videoCount }}</span>
                        </span>
                    </div>
                    @if($video != null)
                        <div class="p-3 mb-4 border border-red-200 rounded-lg bg-gradient-to-r from-red-50 to-pink-50">
                            <p class="mb-1 text-sm text-gray-600">Latest Video:</p>
                            <p class="font-medium text-gray-800 line-clamp-2">{{ $video->title }}</p>
                        </div>
                    @else
                        <div class="p-3 mb-4 border border-gray-200 rounded-lg bg-gray-50">
                            <p class="text-sm text-gray-500">No videos yet</p>
                        </div>
                    @endif
                    <div class="flex gap-2">
                        <a href="{{ route('videos.create') }}" class="inline-flex items-center justify-center flex-1 gap-2 px-4 py-2 text-sm font-medium text-white transition-colors bg-green-500 rounded-lg hover:bg-green-600">
                            <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor">
                                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                            </svg>
                            Add
                        </a>
                        <a href="{{ route('videos.index') }}" class="inline-flex items-center justify-center flex-1 gap-2 px-4 py-2 text-sm font-medium text-white transition-colors bg-red-500 rounded-lg hover:bg-red-600">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12 2 6.47715 6.47715 2 12 2 17.5228 2 22 6.47715 22 12 22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12 20 7.58172 16.4183 4 12 4 7.58172 4 4 7.58172 4 12 4 16.4183 7.58172 20 12 20ZM13 10.5V15H14V17H10V15H11V12.5H10V10.5H13ZM13.5 8C13.5 8.82843 12.8284 9.5 12 9.5 11.1716 9.5 10.5 8.82843 10.5 8 10.5 7.17157 11.1716 6.5 12 6.5 12.8284 6.5 13.5 7.17157 13.5 8Z"></path></svg>
                            View
                        </a>
                    </div>
                </div>
            </div>

            <!-- Gallery Card -->
            <div class="relative overflow-hidden transition-all duration-300 bg-white border border-gray-100 shadow-md group rounded-xl hover:shadow-xl hover:border-indigo-200">
                <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-amber-500 to-amber-600"></div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Gallery</h3>
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full {{ $galeryCount == 0 ? 'bg-red-100' : 'bg-amber-100' }}">
                            <span class="text-2xl font-bold {{ $galeryCount == 0 ? 'text-red-600' : 'text-amber-600' }}">{{ $galeryCount }}</span>
                        </span>
                    </div>
                    @if($galery != null)
                        <div class="mb-4 overflow-hidden border rounded-lg border-amber-200">
                            <img src="{{ asset('storage/images/'.$galery->img) }}" alt="Latest Gallery" class="object-contain object-center w-full h-32">
                        </div>
                    @else
                        <div class="flex items-center justify-center p-8 mb-4 border border-gray-200 rounded-lg bg-gray-50">
                            <p class="text-sm text-gray-500">No photos yet</p>
                        </div>
                    @endif
                    <div class="flex gap-2">
                        <a href="{{ route('galery.index') }}" class="inline-flex items-center justify-center flex-1 gap-2 px-4 py-2 text-sm font-medium text-white transition-colors bg-green-500 rounded-lg hover:bg-green-600">
                            <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor">
                                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                            </svg>
                            Add
                        </a>
                        <a href="{{ route('galery.index') }}" class="inline-flex items-center justify-center flex-1 gap-2 px-4 py-2 text-sm font-medium text-white transition-colors rounded-lg bg-amber-500 hover:bg-amber-600">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12 2 6.47715 6.47715 2 12 2 17.5228 2 22 6.47715 22 12 22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12 20 7.58172 16.4183 4 12 4 7.58172 4 4 7.58172 4 12 4 16.4183 7.58172 20 12 20ZM13 10.5V15H14V17H10V15H11V12.5H10V10.5H13ZM13.5 8C13.5 8.82843 12.8284 9.5 12 9.5 11.1716 9.5 10.5 8.82843 10.5 8 10.5 7.17157 11.1716 6.5 12 6.5 12.8284 6.5 13.5 7.17157 13.5 8Z"></path></svg>
                            View
                        </a>
                    </div>
                </div>
            </div>

            <!-- Partners Logo Card -->
            <div class="relative overflow-hidden transition-all duration-300 bg-white border border-gray-100 shadow-md group rounded-xl hover:shadow-xl hover:border-indigo-200">
                <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-cyan-500 to-cyan-600"></div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Partners</h3>
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full {{ $clientCount == 0 ? 'bg-red-100' : 'bg-cyan-100' }}">
                            <span class="text-2xl font-bold {{ $clientCount == 0 ? 'text-red-600' : 'text-cyan-600' }}">{{ $clientCount }}</span>
                        </span>
                    </div>
                    @if($client != null)
                        <div class="mb-4 overflow-hidden border rounded-lg border-cyan-200">
                            <img src="{{ asset('storage/images/'.$client->img) }}" alt="Latest Partner" class="object-contain object-center w-full h-32">
                        </div>
                    @else
                        <div class="flex items-center justify-center p-8 mb-4 border border-gray-200 rounded-lg bg-gray-50">
                            <p class="text-sm text-gray-500">No partners yet</p>
                        </div>
                    @endif
                    <div class="flex gap-2">
                        <a href="{{ route('client.index') }}" class="inline-flex items-center justify-center flex-1 gap-2 px-4 py-2 text-sm font-medium text-white transition-colors bg-green-500 rounded-lg hover:bg-green-600">
                            <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor">
                                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                            </svg>
                            Add
                        </a>
                        <a href="{{ route('client.index') }}" class="inline-flex items-center justify-center flex-1 gap-2 px-4 py-2 text-sm font-medium text-white transition-colors rounded-lg bg-cyan-500 hover:bg-cyan-600">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12 2 6.47715 6.47715 2 12 2 17.5228 2 22 6.47715 22 12 22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12 20 7.58172 16.4183 4 12 4 7.58172 4 4 7.58172 4 12 4 16.4183 7.58172 20 12 20ZM13 10.5V15H14V17H10V15H11V12.5H10V10.5H13ZM13.5 8C13.5 8.82843 12.8284 9.5 12 9.5 11.1716 9.5 10.5 8.82843 10.5 8 10.5 7.17157 11.1716 6.5 12 6.5 12.8284 6.5 13.5 7.17157 13.5 8Z"></path></svg>
                            View
                        </a>
                    </div>
                </div>
            </div>

            <!-- Collaboration Logo Card -->
            <div class="relative overflow-hidden transition-all duration-300 bg-white border border-gray-100 shadow-md group rounded-xl hover:shadow-xl hover:border-indigo-200">
                <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-pink-500 to-pink-600"></div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Collaboration</h3>
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full {{ $kerjasamaCount == 0 ? 'bg-red-100' : 'bg-pink-100' }}">
                            <span class="text-2xl font-bold {{ $kerjasamaCount == 0 ? 'text-red-600' : 'text-pink-600' }}">{{ $kerjasamaCount }}</span>
                        </span>
                    </div>
                    @if($kerjasama != null)
                        <div class="mb-4 overflow-hidden border border-pink-200 rounded-lg">
                            <img src="{{ asset('storage/images/'.$kerjasama->img) }}" alt="Latest Collaboration" class="object-contain object-center w-full h-32">
                        </div>
                    @else
                        <div class="flex items-center justify-center p-8 mb-4 border border-gray-200 rounded-lg bg-gray-50">
                            <p class="text-sm text-gray-500">No collaborations yet</p>
                        </div>
                    @endif
                    <div class="flex gap-2">
                        <a href="{{ route('kerjasama.index') }}" class="inline-flex items-center justify-center flex-1 gap-2 px-4 py-2 text-sm font-medium text-white transition-colors bg-green-500 rounded-lg hover:bg-green-600">
                            <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor">
                                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                            </svg>
                            Add
                        </a>
                        <a href="{{ route('kerjasama.index') }}" class="inline-flex items-center justify-center flex-1 gap-2 px-4 py-2 text-sm font-medium text-white transition-colors bg-pink-500 rounded-lg hover:bg-pink-600">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12 2 6.47715 6.47715 2 12 2 17.5228 2 22 6.47715 22 12 22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12 20 7.58172 16.4183 4 12 4 7.58172 4 4 7.58172 4 12 4 16.4183 7.58172 20 12 20ZM13 10.5V15H14V17H10V15H11V12.5H10V10.5H13ZM13.5 8C13.5 8.82843 12.8284 9.5 12 9.5 11.1716 9.5 10.5 8.82843 10.5 8 10.5 7.17157 11.1716 6.5 12 6.5 12.8284 6.5 13.5 7.17157 13.5 8Z"></path></svg>
                            View
                        </a>
                    </div>
                </div>
            </div>

            <!-- Banner Card -->
            <div class="relative overflow-hidden transition-all duration-300 bg-white border border-gray-100 shadow-md group rounded-xl hover:shadow-xl hover:border-indigo-200">
                <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-orange-500 to-orange-600"></div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Banners</h3>
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full {{ $bannerCount == 0 ? 'bg-red-100' : 'bg-orange-100' }}">
                            <span class="text-2xl font-bold {{ $bannerCount == 0 ? 'text-red-600' : 'text-orange-600' }}">{{ $bannerCount }}</span>
                        </span>
                    </div>
                    @if($banner != null)
                        <div class="mb-4 overflow-hidden border border-orange-200 rounded-lg">
                            <img src="{{ asset('storage/images/'.$banner->img) }}" alt="Latest Banner" class="object-contain object-center w-full h-32">
                        </div>
                    @else
                        <div class="flex items-center justify-center p-8 mb-4 border border-gray-200 rounded-lg bg-gray-50">
                            <p class="text-sm text-gray-500">No banners yet</p>
                        </div>
                    @endif
                    <div class="flex gap-2">
                        <a href="{{ route('banners.index') }}" class="inline-flex items-center justify-center flex-1 gap-2 px-4 py-2 text-sm font-medium text-white transition-colors bg-green-500 rounded-lg hover:bg-green-600">
                            <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor">
                                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                            </svg>
                            Add
                        </a>
                        <a href="{{ route('banners.index') }}" class="inline-flex items-center justify-center flex-1 gap-2 px-4 py-2 text-sm font-medium text-white transition-colors bg-orange-500 rounded-lg hover:bg-orange-600">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12 2 6.47715 6.47715 2 12 2 17.5228 2 22 6.47715 22 12 22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12 20 7.58172 16.4183 4 12 4 7.58172 4 4 7.58172 4 12 4 16.4183 7.58172 20 12 20ZM13 10.5V15H14V17H10V15H11V12.5H10V10.5H13ZM13.5 8C13.5 8.82843 12.8284 9.5 12 9.5 11.1716 9.5 10.5 8.82843 10.5 8 10.5 7.17157 11.1716 6.5 12 6.5 12.8284 6.5 13.5 7.17157 13.5 8Z"></path></svg>
                            View
                        </a>
                    </div>
                </div>
            </div>

            <!-- Inpo loker Card -->
            <div class="relative overflow-hidden transition-all duration-300 bg-white border border-gray-100 shadow-md group rounded-xl hover:shadow-xl hover:border-indigo-200">
                <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-emerald-500 to-emerald-600"></div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Info Loker</h3>
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full {{ $infoLoker == 0 ? 'bg-red-100' : 'bg-orange-100' }}">
                            <span class="text-2xl font-bold {{ $infoLoker == 0 ? 'text-red-600' : 'text-emerald-600' }}">{{ $infoLoker }}</span>
                        </span>
                    </div>
                    @if($loker != null)
                        <div class="flex items-center justify-between mb-4 overflow-hidden border border-orange-200 rounded-lg">
                            <div class="flex items-center">
                                <div
                                    class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-full bg-amber-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor" class="w-4 h-4 text-amber-600">
                                        <path
                                            d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-2 capitalize sm:ml-4 text-start">
                                    <div class="text-sm font-medium text-gray-900">{{ $loker->city }}
                                    </div>
                                    <div class="hidden text-xs text-gray-500 sm:block">
                                        {{ $loker->province }}</div>
                                </div>
                            </div>
                            <div>
                                <span
                                    class="inline-flex items-center px-2 py-1 text-xs font-medium capitalize rounded-full">
                                    {{ $loker->position }}: {{ $loker->count }}
                                </span>
                            </div>
                        </div>
                    @else
                        <div class="flex items-center justify-center p-8 mb-4 border border-gray-200 rounded-lg bg-gray-50">
                            <p class="text-sm text-gray-500">No lokers yet</p>
                        </div>
                    @endif
                    <div class="flex gap-2">
                        <a href="{{ route('info_loker.index') }}" class="inline-flex items-center justify-center flex-1 gap-2 px-4 py-2 text-sm font-medium text-white transition-colors bg-green-500 rounded-lg hover:bg-green-600">
                            <svg class="w-4 h-4" viewBox="0 0 16 16" fill="currentColor">
                                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                            </svg>
                            Add
                        </a>
                        <a href="{{ route('info_loker.index') }}" class="inline-flex items-center justify-center flex-1 gap-2 px-4 py-2 text-sm font-medium text-white transition-colors rounded-lg bg-emerald-500 hover:bg-emerald-600">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12 2 6.47715 6.47715 2 12 2 17.5228 2 22 6.47715 22 12 22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12 20 7.58172 16.4183 4 12 4 7.58172 4 4 7.58172 4 12 4 16.4183 7.58172 20 12 20ZM13 10.5V15H14V17H10V15H11V12.5H10V10.5H13ZM13.5 8C13.5 8.82843 12.8284 9.5 12 9.5 11.1716 9.5 10.5 8.82843 10.5 8 10.5 7.17157 11.1716 6.5 12 6.5 12.8284 6.5 13.5 7.17157 13.5 8Z"></path></svg>
                            View
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</x-app-layout>
