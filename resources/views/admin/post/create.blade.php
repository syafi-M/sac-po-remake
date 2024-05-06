<x-app-layout>
    <div class="m-20 pt-10">
        <div class="bg-indigo-500 w-2/6 p-2 rounded-t-[3.5px] font-semibold text-white">
            <span>Tambah Artikel Baru +</span>
        </div>
        <div class="bg-indigo-200 w-2/6 p-2 rounded-b-[3.5px]">
            <form action="{{ route('post.store') }}" enctype="multipart/form-data">
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Title</span>
                    </div>
                    <input type="text" placeholder="Judul Artikel" class="input input-sm input-bordered w-full rounded-[3.5px]" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Foto Artikel</span>
                    </div>
                    <input type="file" class="file-input file-input-sm file-input-bordered w-full rounded-[3.5px]" />
                    <div class="preview hidden">
							<img src="" alt="" srcset="" height="120px" width="120px">
						</div>
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Desc</span>
                    </div>
                    <textarea type="text" placeholder="Desc Artikel" class="text-area text-area-sm text-area-bordered w-full rounded-[3.5px]" ></textarea>
                </label>
                <div class="flex gap-x-1 my-1">
                    <button type="submit" class="btn btn-sm rounded-[3.5px] bg-indigo-500 text-indigo-950 hover:text-white hover:bg-indigo-700 border-0">Save</button>
                    <button type="button" class="btn btn-sm rounded-[3.5px] bg-red-500 border-0 text-red-950 hover:text-white hover:bg-red-700">Cancel</button>
                </div>
            </form>
        </div>
        <div>

        </div>
    </div>
    
</x-app-layout>