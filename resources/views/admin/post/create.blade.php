<x-app-layout>
    <div class="flex w-screen mt-10 py-20 px-20 gap-x-20">
        <div>
            <div class="bg-indigo-500 w-full p-2 rounded-t-[3.5px] font-semibold text-white">
                <span>Tambah Artikel Baru +</span>
            </div>
            <div class="bg-indigo-200 w-full p-2 rounded-b-[3.5px]">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text required">Title</span>
                        </div>
                        <input id="title" name="title" required type="text" placeholder="Judul Artikel" class="input input-sm input-bordered w-full rounded-[3.5px]" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </label>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text required">Foto Artikel</span>
                        </div>
                        <input id="img" name="img" type="file" required class="file-input file-input-sm file-input-bordered w-full rounded-[3.5px]" />
                        <x-input-error :messages="$errors->get('img')" class="mt-2" />
                    </label>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text required">Desc</span>
                        </div>
                        <textarea type="text" id="desc" name="desc" required placeholder="Desc Artikel" class="text-area text-area-sm text-area-bordered w-full rounded-[3.5px]" ></textarea>
                        <x-input-error :messages="$errors->get('desc')" class="mt-2" />
                    </label>
                    <input type="text" name="author" class="hidden" value="{{ Auth::user()->name }}">
                    <div class="badge badge-info ml-52 gap-2 mt-1 capitalize text-sky-900 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-4 h-4 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        Author {{ Auth::user()->name }}
                    </div>
                    <div class="flex gap-x-1 my-1">
                        <button type="submit" class="btn btn-sm rounded-[3.5px] bg-indigo-500 text-indigo-950 hover:text-white hover:bg-indigo-700 border-0">Save</button>
                        <a href="{{ url()->previous() }}" class="btn btn-sm rounded-[3.5px] bg-red-500 border-0 text-red-950 hover:text-white hover:bg-red-700">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    <div class="preview hidden">
        <img src="" alt="" srcset="" height="500px" width="500px">
    </div>
    </div>

</x-app-layout>
