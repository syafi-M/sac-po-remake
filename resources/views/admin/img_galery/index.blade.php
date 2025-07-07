<x-app-layout>
    <div class="pt-28 mx-5">
        <div class="flex items-center mb-6 gap-x-1">
            <a href="{{ route('dashboard')}}" class="icon btn btn-sm bg-transparent hover:bg-transparent hover:border-0 border-0 transition-all ease-in-out duration-150 shadow-none">
                <i class="ri-arrow-left-circle-line text-2xl text-indigo-500"></i>
                <i class="ri-arrow-left-circle-fill text-2xl text-indigo-500 hidden"></i>
            </a>
            <button id="client" type="button" class="btn btn-sm rounded-sm bg-green-500 text-green-900 hover:bg-green-600 hover:text-white"><i class="ri-add-fill text-lg"></i> GALERRY</button>
        </div>
        <form action="{{ route('galery.store')}}" enctype="multipart/form-data" method="post" id="form" class="hidden items-center">
            @csrf
            @method('POST')
            <label class="form-control">
                <div class="label">
                        <span class="label-text required">Foto Galery (Rasio 3:4)</span>
                </div>
                <div class="w-3/6 flex justify-between mb-2 gap-x-2">
                    <div>
                        <input id="img" name="img" type="file" required class="file-input file-input-sm file-input-bordered rounded-[3.5px]" />
                        <x-input-error :messages="$errors->get('img')" class="mt-2" />
                        <div class="preview hidden">
                            <img src="" alt="" srcset="" height="500px" width="500px">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm rounded-sm bg-indigo-500 hover:bg-indigo-700 text-indigo-900 hover:text-white">Save</button>
                    </div>
                </label>
        </form>
        <div class="flex justify-stretch max-w-screen gap-2">
            @php
                $no = 1;
            @endphp
            @forelse ($galery as $item)
                <div class="flex gap-x-1">
                    <span> {{ $no++ }}</span>
                   <img src="{{ asset('storage/images/' . $item->img)}}" class="max-w-52 h-auto openModal" data-dataId="{{$item->id}}" alt="Banner" srcset="{{ asset('storage/images/' . $item->img)}}">
                </div>
            @empty
            @endforelse
        </div>
        {{-- modal delete --}}
        <div class="fixed z-50 inset-x-[20%] top-[20%] hidden" id="deleteModal">
            <div class="modal-box mx-auto">
                <h2 class="font-bold text-lg">Hapus Galeri</h2>
                <p>Apakah Anda yakin ingin menghapus foto ini?</p>
                <img id="imgPrev" data-id="" src="" alt="" class="max-h-[300px]">
                <div class="modal-action">
                    <form action="" method="POST" id="deleteForm">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-error" id="confirmDelete">Hapus</button>
                    </form>
                    <button class="btn btn-sm btn-secondary" id="cancelDelete">Batal</button>
                </div>
            </div>
    </div>

<script>
    const client = $("#client");

    client.on("click", function() {
        $("#form").toggleClass('hidden').toggleClass('flex')
    })

    $('.openModal').on('click', function() {
        const imgSrc = $(this).attr('src');
        const imgId = $(this).data('dataid');
        $('#imgPrev').attr('src', imgSrc);
        $('#imgPrev').data('id', imgId);
        $('#deleteModal').show();
    });

    $('#cancelDelete').on('click', function() {
        $('#deleteModal').hide();
    });

    $('#confirmDelete').on('click', function() {
        const imgSrc = $('#imgPrev').attr('src');
        const imgName = imgSrc.split('/').pop();
        const imgId = $('#imgPrev').data('id');
        $('#deleteForm').attr('action', "{{ route('galery.destroy', '') }}/" + imgId);
        $('#deleteForm').submit();

    });

</script>
</x-app-layout>
