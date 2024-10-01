<x-page-layout>

<section class="bg-center m-6 rounded-3xl hover:shadow-2xl bg-no-repeat bgimg bg-gray-700 bg-blend-multiply">
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

<section>
    <video width="600" class="xl:w-9/12 md:w-2/3 lg:w-4/5" controls autoplay>
        <source src="video/video1.mp4" type="video/mp4">
      </video>
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

    <div class="grid grid-cols-5 gap-4">
         <div class="text-center">
        <a href="/Wedding" class="py-2 px-3 text-xs font-thin m-3   text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">Wedding</a>
            <a href="/image/wedding.jpg" target="_blank" rel="noopener noreferrer">
                <img class="h-auto max-w-full rounded-lg m-3" src="/image/wedding.jpg" alt="image">
            </a>
        </div>

        <div class="text-center">
            <a href="/Landscape" class="py-2 px-3 text-xs m-3 font-thin   text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">Landscape</a>
            <a href="/image/landscape1.jpg" target="_blank" rel="noopener noreferrer">
                <img class="h-auto max-w-full m-3 rounded-lg" src="/image/landscape1.jpg" alt="image"loading="_lazy">
            </a>
        </div>

        <div class="text-center">
            <a href="/PostPhoto" class="py-1 px-2 text-xs font-thin   text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">Others</a>
            <a href="/image/photo 5.jpg" target="_blank" rel="noopener noreferrer">
                <img class="h-auto max-w-full rounded-lg m-3" src="/image/photo 5.jpg" alt="image" loading="_lazy">
            </a>
        </div>
        <div class="text-center">
            <a href="/event" class="py-2 px-3 m-4 text-xs font-thin   text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">Event</a>
            <a href="/image/event.jpg" target="_blank" rel="noopener noreferrer">
                <img class="h-auto max-w-full rounded-lg m-3" src="/image/event.jpg" alt="image" loading="_lazy">
            </a>
        </div>
    </div>
</div>

<!-- gallery end -->


</x-page-layout>
