<div>
    <section>
        <div>
            <div class="text-center m-3 p-3">
                <h1 class="text-2xl font-bold p-3 m-3">Image Gallery</h1>
                <p class="text-base text-gray-400 m-3">Some photos</p>
            </div>
            @foreach ($weddingPTs as $weedingPt)

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{Storage::url($weddingPt->image)}}" alt="image">
                </div>
            </div>

            @endforeach

        </div>

    </section>
</div>
