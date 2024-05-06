<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Avatars -->

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
                <div class="bg-white rounded-md flex flex-col justify-between shadow-md p-2">
                    <span class="flex flex-col justify-center items-center">Artikel Yang Di Post <span class="{{ $postCount == 0 ? 'text-red-600' : 'text-white' }} font-semibold rounded-full bg-indigo-500 p-2 px-4">{{ $postCount }}</span></span>
                    <!-- Add view button -->
                    <a href="{{ route('post.create') }}" class="btn bg-indigo-500 hover:bg-indigo-600 btn-sm rounded-[3.5px] text-white">
                        <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                        </svg>
                        <span class="block ml-2">Tambah Artikel</span>
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