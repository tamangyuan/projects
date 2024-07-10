<x-page-layout>

    <div>
        @foreach ($landscapes as $landscape)
        <ul>
            <li class="container m-3 p-3 border border-solid rounded-2xl hover:shadow-inner text-lg font-bold">
                {{$landscape->title}}
                <img src="{{Storage::url($landscape->image)}}" class="rounded-lg m-2" alt="image">
                {{$landscape->name}}<br>
                {{$landscape->description}}
            </li>
        </ul>
        @endforeach
    </div>

</x-page-layout>
