<x-page-layout>

<div>
    <div class="grid md:grid-cols-4 gap-2.5 py-10 bg-gray-200 m-6 p-3 rounded-3xl hover:shadow-2xl">
        @foreach ($weddingPts as $weddingPt)

            <span class="max-w-sm flex flex-col  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">

                @foreach ($weddingPt["image"] as $image)

                <a href="{{Storage::url($image)}}" class="h-96 w-96">
                    <img class="rounded-2xl" src="{{Storage::url($image)}}" alt="image" />
                </a>
                @endforeach

               <span class="p-5">
                    <a href="#">
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$weddingPt->title}}</h5>
                    </a>
                   <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$weddingPt->name}}</p>
                </span>
            </span>

        @endforeach
    </div>
</div>

</x-page-layout>
