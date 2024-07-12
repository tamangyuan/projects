<x-page-layout>
    <div>

        @foreach ($PostPhotos as $PostPhoto)

                <span class="grid grid-cols-2">
                    <div></div>
                    <div>
                        <img src="{{Storage::url($PostPhoto->image)}}" class="rounded-lg m-3 p-3" alt="image">
                    </div>
                    <div></div>
                </span>

        @endforeach
    </div>
</x-page-layout>
