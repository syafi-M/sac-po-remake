<x-app-layout>
    <style>
        /* Show the filled icon when hovering over the button */
        .icon:hover .ri-arrow-left-circle-fill {
            display: block;
            color: rgb(67 56 202)
        }

        /* Hide the outline icon when hovering over the button */
        .icon:hover .ri-arrow-left-circle-line {
            display: none;
        }
    </style>
    <div class="pt-28 mx-5">
        <a href="{{ route('dashboard')}}" class="icon btn btn-sm bg-transparent hover:bg-transparent hover:border-0 border-0 transition-all ease-in-out duration-150 shadow-none">
            <i class="ri-arrow-left-circle-line text-2xl text-indigo-500"></i>
            <i class="ri-arrow-left-circle-fill text-2xl text-indigo-500 hidden"></i>
        </a>
        <div class="grid grid-flow-col grid-cols-3 gap-5">
            @forelse($post as $item)
            <x-simple-modal data="{{ $item->title }}" desc="{{ $item->desc }}" id="modal" open="false" title="Show Data">

                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('storage/images/' . $item->img) }}" class="max-w-full mb-2 rounded-[3.5px]" alt="" srcset="">
                    <div class="bg-indigo-500 p-2 w-full text-center text-white font-semibold rounded-t-[3.5px]">
                        {{ $item->title }}
                    </div>
                    <div class="bg-indigo-300 p-2 text-center text-slate-900  rounded-b-[3.5px] overflow-y-auto">{{ $item->desc }}</div>
                </div>
            </x-simple-modal>

            @empty
            <div class="flex flex-col">
                <div class="bg-indigo-500 p-2 text-center text-white font-semibold rounded-[3.5px]">
                    Artikel Masih Kosong
                </div>
            </div>
            @endforelse
        </div>
        <div>
            {{ $post->links() }}
        </div>
    </div>




</x-app-layout>

