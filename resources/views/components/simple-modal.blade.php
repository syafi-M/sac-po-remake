@props(['title', 'open', 'data', 'desc'])

<div x-data="{ isOpen: {{$open}} }" id="modal">
    <!-- Button to open the modal -->

    <div class="flex flex-col hover:cursor-pointer "  @click="isOpen = true">
        <div class="bg-indigo-500 hover:bg-indigo-400 transition-all ease-in-out duration-150 hover:text-slate-800 p-2 text-center text-white font-semibold rounded-t-[3.5px]">
            {!! $data !!}
        </div>
        <div class="bg-indigo-300 p-2 text-center text-slate-900  rounded-b-[3.5px] line-clamp-4">{!! $desc !!}</div>
    </div>

    <!-- Modal backdrop -->
        <div  x-show="isOpen" x-on:keydown.escape.window="isOpen = {{$open}}" style="display: none;" class="fixed inset-0 backdrop-blur-sm bg-black bg-opacity-50 flex items-center justify-center z-50">
            <!-- Modal content -->
                <div @click.away="isOpen = {{$open}}" class="bg-white max-w-xl p-6 rounded-lg shadow-xl" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0">
                    <!-- Close button -->
                <div class="flex items-center justify-between my-4">
                    <!-- Modal title -->
                    <h2 class="text-lg font-bold">{{ $title }}</h2>
                    <button @click="isOpen = {{$open}}" class="bg-red-500 hover:bg-red-600 transition-all ease-in-out duration-150 text-white font-bold py-2 px-4 rounded">
                        <i class="ri-close-fill text-lg"></i>
                    </button>
                </div>

                <!-- Modal body -->
                <span x-trap.inert.noscroll="isOpen"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    {{ $slot }}
                </span>


            </div>
        </div>
</div>
