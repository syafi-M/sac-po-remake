<x-app-layout>
    <div class="pt-28 mx-5">
         <div class="flex items-center mb-6 gap-x-1">
            <a href="{{ route('dashboard')}}" class="icon btn btn-sm bg-transparent hover:bg-transparent hover:border-0 border-0 transition-all ease-in-out duration-150 shadow-none">
                <i class="ri-arrow-left-circle-line text-2xl text-indigo-500"></i>
                <i class="ri-arrow-left-circle-fill text-2xl text-indigo-500 hidden"></i>
            </a>
            <button id="client" type="button" class="btn btn-sm rounded-sm bg-green-500 text-green-900 hover:bg-green-600 hover:text-white"><i class="ri-add-fill text-lg"></i> INFO LOKER</button>
        </div>

    </div>
</x-app-layout>