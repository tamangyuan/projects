<x-page-layout>

<section class="bg-center m-6 rounded-3xl hover:shadow-2xl bg-no-repeat bg-[url('/image/photo 1.jpg')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">PROFESSIONAL PHOTO & VIDEO GRAPHY</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Wedding Photoshoot,Post Photoshoot and etc.With 4k video.Affordtable price Book now!</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="/Dashboard" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Book now!
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            <a href="{{Route("View")}}" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                Viewing
            </a>
        </div>
    </div>
</section>

<!-- gallery -->

<div>
    <div class="text-center m-3 p-3">
        <h1 class="text-2xl font-bold p-3 m-3">Image Gallery</h1>
        <p class="text-base text-gray-400 m-3">Some photos</p>
    </div>
</div>
<div class="grid gap-4 m-3">
         <div>
            <img class="h-auto max-w-full rounded-lg" src="/image/photo 2.jpg" alt="image"loading="_lazy">
        </div>

        <div class="m-3 p-3 lg:text-base lg:font-medium">
        <a href="/WeddingPhoto" class="py-2 px-3 text-xs font-thin text-right   text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">Wedding Photo</a>
        <a href="/Landscape" class="py-2 px-3 text-xs font-thin text-right   text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">Landscape</a>
    </div>

    <div class="grid grid-cols-5 gap-4">
         <div>

            <img class="h-auto max-w-full rounded-lg" src="/image/photo 3.jpg" alt="image">
        </div>

        <div>
            <img class="h-auto max-w-full rounded-lg" src="/image/photo 4.jpg" alt="image"loading="_lazy">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="/image/photo 5.jpg" alt="image" loading="_lazy">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="/image/photo 6.jpg" alt="image"loading="_lazy">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="/image/photo 7.jpg" alt="image" loading="_lazy">
        </div>
    </div>
</div>

<!-- gallery end -->


</x-page-layout>
