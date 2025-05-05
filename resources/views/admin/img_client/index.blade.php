<x-app-layout>
    <div class="pt-28 mx-5">
         <div class="flex items-center mb-6 gap-x-1">
            <a href="{{ route('dashboard')}}" class="icon btn btn-sm bg-transparent hover:bg-transparent hover:border-0 border-0 transition-all ease-in-out duration-150 shadow-none">
                <i class="ri-arrow-left-circle-line text-2xl text-indigo-500"></i>
                <i class="ri-arrow-left-circle-fill text-2xl text-indigo-500 hidden"></i>
            </a>
            <button id="client" type="button" class="btn btn-sm rounded-sm bg-green-500 text-green-900 hover:bg-green-600 hover:text-white"><i class="ri-add-fill text-lg"></i> CLIENT</button>
        </div>

        <form action="{{ route('client.store')}}" enctype="multipart/form-data" method="post" id="form" class="hidden items-center">
            @csrf
            @method('POST')
            <label class="form-control">
                <div class="label">
                        <span class="label-text required">Foto Client</span>
                </div>
                <div class="w-3/6 flex justify-between items-center mb-2 gap-x-2">
                    <div>
                        <input id="img" name="img" type="file" required class="file-input file-input-sm file-input-bordered rounded-[3.5px]" />
                        <x-input-error :messages="$errors->get('img')" class="mt-2" />
                            <input type="text" name="name" id="name" placeholder="Nama Client.." class="input input-bordered input-sm w-full my-2">
                            <div class="preview hidden">
                                <img src="" alt="" srcset="" height="500px" width="500px">
                            </div>
                    </div>
                    <button type="submit" class="btn btn-sm rounded-sm bg-indigo-500 hover:bg-indigo-700 text-indigo-900 hover:text-white">Save</button>
                    </div>
                </label>
        </form>
        <div class="grid grid-cols-7 justify-stretch max-w-screen gap-2">

            @php
                $no = 1;
            @endphp
            @forelse ($client as $item)
                <div class="flex flex-col justify-between gap-x-1">
                    <span class="flex">
                        <span>{{ $no++ }}. </span>
                       <img src="{{ asset('storage/images/' . $item->img)}}" width="150" height="150" alt="Banner" srcset="{{ asset('storage/images/' . $item->img)}}">
                    </span>
                   <p class="text-center font-semibold text-sm">{{ $item->name }}</p>
                </div>
            @empty

            @endforelse
        </div>
    </div>

<script>
    const client = $("#client");

    client.on("click", function() {
        $("#form").toggleClass('hidden').toggleClass('flex')
    })
</script>
</x-app-layout>
