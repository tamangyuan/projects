<x-page-layout>
<div>
    <div class="grid md:grid-cols-4 py-10 gap-2.5  bg-slate-200 rounded-xl hover:shadow-2xl">
        @foreach ($PostPhotos as $PostPhoto)

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                @foreach ($PostPhoto["image"] as $image)
                <img class="rounded-2xl" src="{{Storage::url($image)}}" alt="image" />

                @endforeach
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$PostPhoto->title}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$PostPhoto->names}}</p>
            </div>
        </div>

        @endforeach
    </div>
</div>
</x-page-layout>
