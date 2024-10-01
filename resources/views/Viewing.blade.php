<x-page-layout>

    <div>

        <div class="grid md:grid-cols-4 gap-2.5 py-10 bg-gray-500 m-6 p-3 rounded-3xl hover:shadow-2xl">
            @foreach ($customers as $customer)
            <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700 hover:shadow-2xl">
            <div class="flex items-center space-x-2 rtl:space-x-reverse hover:shadow-xl">
                <span class="text-sm font-semibold text-gray-900 dark:text-white">{{$customer->name}}</span>
                {{-- <span class="text-sm font-normal text-gray-500 dark:text-gray-400">{{$customer->phone}}</span> --}}
            </div>
            <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">
                {!! $customer->description !!}
            </p>
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">{{$customer->created_at->format('d M, Y')}}</span>
        </div>
            @endforeach
        </div>

        <x-slider>
        </x-slider>

    </div>

</x-page-layout>
