<x-app-layout>
    <div class="pt-28 mx-5">
         <div class="flex items-center mb-6 gap-x-1">
            <a href="{{ route('dashboard')}}" class="icon btn btn-sm bg-transparent hover:bg-transparent hover:border-0 border-0 transition-all ease-in-out duration-150 shadow-none">
                <i class="ri-arrow-left-circle-line text-2xl text-indigo-500"></i>
                <i class="ri-arrow-left-circle-fill text-2xl text-indigo-500 hidden"></i>
            </a>
            <button id="client" type="button" class="btn btn-sm rounded-sm bg-green-500 text-green-900 hover:bg-green-600 hover:text-white"><i class="ri-add-fill text-lg"></i> BANNER</button>
        </div>

        <form action="{{ route('banners.store')}}" enctype="multipart/form-data" method="post" id="form" class="hidden items-center">
            @csrf
            @method('POST')
            <label class="form-control">
                <div class="label">
                        <span class="label-text required">Foto Banner</span>
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
            @forelse ($banner as $item)
                <div class="flex gap-x-1" style="">
                    <span> {{ $no++ }}</span>
                    <span style="padding: 8px; background-color: #f59e0b; border-radius: 10px; min-height: 100%; flex-direction: column; display: flex; gap: 4px;">
                        <img src="{{ asset('storage/images/' . $item->img)}}" style="height: 90%;" class="max-w-52" alt="Banner" srcset="{{ asset('storage/images/' . $item->img)}}">
                        <div class="flex gap-1 justify-center">
                            <span style="padding: 2px 8px 2px 8px; background-color: #fffbeb; border-radius: 8px; width: fit-content; font-size: 20px; line-height: 30px;">
                                <button type="button" style="color: #f59e0b;" class="edit-btn" data-id="{{ $item->id }}" data-img="{{ asset('storage/images/' . $item->img) }}"><i class="ri-image-edit-line"></i></button>
                                <button type="button" style="color: #dc2626;" class="delete-btn" data-id="{{ $item->id }}"><i class="ri-delete-bin-2-line"></i></button>
                            </span>
                        </div>
                    </span>
                </div>
            @empty

            @endforelse
        </div>
    </div>
    
    <!-- Edit Modal -->
    <div id="editModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-4 rounded-lg">
            <form id="editForm" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <div>
                    <label for="editImg" class="form-control">
                        <span class="label-text">Edit Banner Image</span>
                        <input id="editImg" name="img" type="file" class="file-input file-input-sm file-input-bordered rounded-[3.5px]" />
                    </label>
                    <div class="preview hidden mt-2">
                        <img id="editImgPreview" src="" alt="Banner Preview" height="500px" width="500px">
                    </div>
                </div>
                <button type="submit" class="btn btn-sm rounded-sm bg-indigo-500 hover:bg-indigo-700 text-indigo-900 hover:text-white mt-4">Save Changes</button>
                <button type="button" class="btn btn-sm rounded-sm bg-gray-500 hover:bg-gray-700 text-gray-900 hover:text-white mt-4" id="closeEditModal">Cancel</button>
            </form>
        </div>
    </div>

    <!-- Delete Modal -->
    <div id="deleteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-4 rounded-lg">
            <p>Are you sure you want to delete this banner?</p>
            <form id="deleteForm" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm rounded-sm bg-red-500 hover:bg-red-700 text-red-900 hover:text-white mt-4">Delete</button>
                <button type="button" class="btn btn-sm rounded-sm bg-gray-500 hover:bg-gray-700 text-gray-900 hover:text-white mt-4" id="closeDeleteModal">Cancel</button>
            </form>
        </div>
    </div>

<script>
    $(document).ready(function() {
        const client = $("#client");
    
        client.on("click", function() {
            $("#form").toggleClass('hidden').toggleClass('flex')
        })
        
        // Edit modal functionality
        $('.edit-btn').on('click', function() {
            const id = $(this).data('id');
            const img = $(this).data('img');
            
            const editUrl = `{{ route('banners.update', ':id') }}`.replace(':id', id);

            $('#editForm').attr('action', editUrl);
            $('#editImgPreview').attr('src', img).removeClass('hidden');
            $('#editModal').removeClass('hidden');
        });

        $('#closeEditModal').on('click', function() {
            $('#editModal').addClass('hidden');
        });

        // Delete modal functionality
        $('.delete-btn').on('click', function() {
            const id = $(this).data('id');
            
            const delUrl = `{{ route('banners.destroy', ':id') }}`.replace(':id', id);

            $('#deleteForm').attr('action', delUrl);
            $('#deleteModal').removeClass('hidden');
        });

        $('#closeDeleteModal').on('click', function() {
            $('#deleteModal').addClass('hidden');
        });
    })
</script>
</x-app-layout>
