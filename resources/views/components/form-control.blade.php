<div class="bg-white space-y-6 border-b border-gray-200 pt-2 pb-6">
    <div class="inline-flex space-y-4 space-y-0 w-full p-4 text-gray-700 items-center">
        <h2 class="md:w-1/4 max-w-sm mx-auto font-bold">{{ $title }}</h2>
        <div class="md:w-3/4 max-w-3xl">
            <div class="w-full inline-flex border">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>