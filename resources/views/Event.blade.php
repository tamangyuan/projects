<x-page-layout>
    <div>

        <div class="grid md:grid-cols-4 py-10 gap-2.5  bg-slate-200 rounded-xl hover:shadow-2xl">
            @foreach ($Events as $Event)

            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                @foreach ($Event["image"] as $image)

                <a href="{{Storage::url($image)}}" class="h-96 w-96">
                    <img class="rounded-2xl" src="{{Storage::url($image)}}" alt="image" />
                </a>
                @endforeach

                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$Event->title}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{!! $Event->description !!}</p>
                </div>
            </div>

            @endforeach
        </div>

    </div>
</x-page-layout>
