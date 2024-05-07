<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Avatars -->

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
                <div class="bg-white rounded-md flex flex-col justify-between shadow-md p-2 gap-y-1">
                    <span class="flex flex-col justify-center items-center">Artikel Yang Di Post <span class="{{ $postCount == 0 ? 'text-red-600' : 'text-white' }} font-semibold rounded-full bg-indigo-500 p-2 px-4">{{ $postCount }}</span></span>
                    <!-- Add view button -->
                        <a href="{{ route('post.create') }}" class="btn bg-green-500 hover:bg-green-600 btn-sm rounded-[3.5px] text-white">
                            <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                            </svg>
                            <span class="block ml-2">Tambah Artikel</span>
                        </a>

                        {{-- button Detail --}}
                        <a href="{{ route('post.index')}}" class="btn bg-indigo-500 hover:bg-indigo-600 btn-sm rounded-[3.5px] text-white flex justify-between items-center">
                        <svg class="w-6 h-6 mr-4 fill-current opacity-50 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12 2 6.47715 6.47715 2 12 2 17.5228 2 22 6.47715 22 12 22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12 20 7.58172 16.4183 4 12 4 7.58172 4 4 7.58172 4 12 4 16.4183 7.58172 20 12 20ZM13 10.5V15H14V17H10V15H11V12.5H10V10.5H13ZM13.5 8C13.5 8.82843 12.8284 9.5 12 9.5 11.1716 9.5 10.5 8.82843 10.5 8 10.5 7.17157 11.1716 6.5 12 6.5 12.8284 6.5 13.5 7.17157 13.5 8Z"></path></svg>
                            <span class="block ml-2">Lihat Artikel</span>
                        </a>
                </div>
                <div class="bg-indigo-500 {{ $post != null ? 'text-white' : 'text-red-800' }} font-semibold w-full h-full rounded-[3.5px] p-2 flex flex-col items-center justify-center">
                    @if($post != null)
                       <span>Artikel Terakhir</span>
                       <div class="bg-slate-700 max-w-xs p-1 rounded-sm flex flex-col">
                             <span class="text-center">{{ $post->title }}</span>
                       </div>
                    @else
                       <span>Artikel Masih Kosong</span>
                    @endif
                </div>

            </div>

        </div>

        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

        </div>

    </div>
</x-app-layout>
