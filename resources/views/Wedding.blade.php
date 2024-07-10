<x-page-layout>

    <div>
        @foreach ($weddingPts as $weddingPt)
        <ul class="">
            <li class="container m-3 p-3 border border-solid rounded-2xl hover:shadow-inner text-lg font-bold">
                {{$weddingPt->title}}
<img src="{{Storage::url($weddingPt->image)}}" alt="">
                {{$weddingPt->name}}
            </li>
        </ul>
        @endforeach
    </div>

</x-page-layout>
