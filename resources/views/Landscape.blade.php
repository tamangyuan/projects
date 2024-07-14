<x-page-layout>

<div>

    <div class="grid grid-cols-4 gap-2.5 py-10 bg-rose-50 rounded-2xl hover:shadow-orange-500 m-2">
        @foreach ($landscapes as $landscape)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                @foreach ($landscape["image"] as $image)
                <img class="rounded-2xl" src="{{Storage::url($landscape->image)}}" alt="image" />
                @endforeach
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$landscape->title}}</h5>
                </a>
                <p class="mb-6 font-normal text-gray-700 dark:text-gray-400">{!! $landscape->description !!}</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    {{$landscape->name}}
                </a>
            </div>
        </div>

        @endforeach
    </div>

</div>

</x-page-layout>
