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
            @forelse($videos as $item)
                <div class="flex flex-col justify-center items-center">
                    <div class="flex flex-row mb-2">
                        <iframe class="max-h-[30vh]" src="{{ URL::asset('storage/' . $item->video_path) }}?autoplay=0" 
                            title="{{ $item->title }}" 
                            frameborder="0" 
                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <form action="{{ route('videos.destroy' , $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm bg-red-500 hover:bg-red-700 h-[30vh] rounded-l-none rounded-r-lg outline-none border-none focus:border-none hover:text-white text-red-900"><i class="ri-delete-bin-2-fill text-lg "></i></button>
                        </form>
                    </div>
                    <div class="bg-indigo-500 p-2 w-full text-center text-white font-semibold rounded-t-[3.5px]">
                        {{ $item->title }}
                    </div>
                    <div class="bg-indigo-300 p-2 text-center text-slate-900 max-h-52 rounded-b-[3.5px] overflow-y-auto">{!! $item->description !!}</div>
                </div>
            @empty
            <div class="flex flex-col">
                <div class="bg-indigo-500 p-2 text-center text-white font-semibold rounded-[3.5px]">
                    Video Masih Kosong
                </div>
            </div>
            @endforelse
        </div>
    </div>
</x-app-layout>

