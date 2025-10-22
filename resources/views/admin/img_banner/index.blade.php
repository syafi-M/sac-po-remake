<x-app-layout>
    <div class="mx-5 pt-28">
        <div class="flex items-center mb-6 gap-x-1">
            <a href="{{ route('dashboard') }}"
                class="transition-all duration-150 ease-in-out bg-transparent border-0 shadow-none icon btn btn-sm hover:bg-transparent hover:border-0">
                <i class="text-2xl text-indigo-500 ri-arrow-left-circle-line"></i>
                <i class="hidden text-2xl text-indigo-500 ri-arrow-left-circle-fill"></i>
            </a>
            <button id="client" type="button"
                class="text-green-900 bg-green-500 rounded-sm btn btn-sm hover:bg-green-600 hover:text-white"><i
                    class="text-lg ri-add-fill"></i> BANNER</button>
        </div>

        <form action="{{ route('banners.store') }}" enctype="multipart/form-data" method="post" id="form"
            class="items-center hidden">
            @csrf
            @method('POST')
            <label class="p-4 mb-6 bg-white rounded-md shadow-md form-control">
                <div class="label">
                    <span class="label-text required">Foto Banner</span>
                </div>
                <div class="flex justify-between w-3/6 mb-2 gap-x-1">
                    <div>
                        <input id="img" name="img" type="file" required
                            class="file-input file-input-sm file-input-bordered rounded-[3.5px]" />
                        <x-input-error :messages="$errors->get('img')" class="mt-2" />
                        <div class="hidden preview">
                            <img src="" alt="" srcset="" height="500px" width="500px">
                        </div>
                    </div>
                    <button type="submit"
                        class="text-indigo-900 bg-indigo-500 rounded-md btn btn-sm hover:bg-indigo-700 hover:text-white">Save</button>
                </div>
            </label>
        </form>

        <div class="grid items-start grid-cols-3 gap-2 max-w-screen">
            @php
                $no = 1;
            @endphp
            @forelse ($banner as $item)
                <div class="flex gap-x-1" style="">
                    <span> {{ $no++ }}</span>
                    <span
                        style="padding: 8px; background-color: #f59e0b; border-radius: 10px; min-height: auto; flex-direction: column; display: flex; gap: 4px;">
                        <img src="{{ asset('storage/images/' . $item->img) }}" class="h-auto max-w-[400px]"
                            alt="Banner" srcset="{{ asset('storage/images/' . $item->img) }}">
                        <div class="flex justify-center gap-1">
                            <span
                                style="padding: 2px 8px 2px 8px; background-color: #fffbeb; border-radius: 8px; width: fit-content; font-size: 20px; line-height: 30px;">
                                <button type="button" style="color: #f59e0b;" class="edit-btn"
                                    data-id="{{ $item->id }}"
                                    data-img="{{ asset('storage/images/' . $item->img) }}"><i
                                        class="ri-image-edit-line"></i></button>
                                <button type="button" style="color: #dc2626;" class="delete-btn"
                                    data-id="{{ $item->id }}"><i class="ri-delete-bin-2-line"></i></button>
                            </span>
                        </div>
                    </span>
                </div>
            @empty
            @endforelse
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
        <div class="p-4 bg-white rounded-lg">
            <form id="editForm" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <div>
                    <label for="editImg" class="form-control">
                        <span class="label-text">Edit Banner Image</span>
                        <input id="editImg" name="img" type="file"
                            class="file-input file-input-sm file-input-bordered rounded-[3.5px]" />
                    </label>
                    <div class="hidden mt-2 preview">
                        <img id="editImgPreview" src="" alt="Banner Preview" height="500px" width="500px">
                    </div>
                </div>
                <button type="submit"
                    class="mt-4 text-indigo-900 bg-indigo-500 rounded-sm btn btn-sm hover:bg-indigo-700 hover:text-white">Save
                    Changes</button>
                <button type="button"
                    class="mt-4 text-gray-900 bg-gray-500 rounded-sm btn btn-sm hover:bg-gray-700 hover:text-white"
                    id="closeEditModal">Cancel</button>
            </form>
        </div>
    </div>

    <!-- Delete Modal -->
    <div id="deleteModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
        <div class="p-4 bg-white rounded-lg">
            <p>Are you sure you want to delete this banner?</p>
            <form id="deleteForm" method="post">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="mt-4 text-red-900 bg-red-500 rounded-sm btn btn-sm hover:bg-red-700 hover:text-white">Delete</button>
                <button type="button"
                    class="mt-4 text-gray-900 bg-gray-500 rounded-sm btn btn-sm hover:bg-gray-700 hover:text-white"
                    id="closeDeleteModal">Cancel</button>
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
