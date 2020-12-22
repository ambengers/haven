<x-content-layout>

<div class="border-b border-gray-200 p-4 bg-opacity-5">
    <div class="max-w-sm mx-auto md:w-full md:mx-0">
        <div class="inline-flex items-center space-x-4">
            <h1 class="mx-8 my-4 text-gray-800 text-3xl font-bold">Create Situation</h1>
        </div>
    </div>
</div>

<x-form-control title="Title *">
    <input type="text" name="title" class="w-full focus:outline-none focus:text-gray-600 p-2" placeholder="Name of the situation.."/>
</x-form-control>

<x-form-control title="Type *">
    <select name="type" class="w-full focus:outline-none focus:text-gray-600 p-2">
        <option>Select Situation Type..</option>
        <option>Flood</option>
        <option>Earthquake</option>
        <option>Fire</option>
    </select>
</x-form-control>

<x-form-control title="Donation Information">
    <textarea rows="5" name="donation_information" class="w-full focus:outline-none focus:text-gray-600 p-2"></textarea>
</x-form-control>

<div class="bg-white space-y-6 border-b border-gray-200 pt-2 pb-6">
    <div class="inline-flex space-y-4 space-y-0 w-full p-4 text-gray-700 items-center">
        <h2 class="md:w-1/4 max-w-sm mx-auto">&nbsp</h2>
        <div class="md:w-3/4 max-w-3xl">
            <div class="w-full">
                <button type="submit" class="text-white mx-auto max-w-sm rounded-md text-center bg-blue-500 py-2 px-4 focus:outline-none mr-4">
                    Submit
                </button>

                <a href="{{ route('situations.index') }}" class="text-gray-600 hover:underline">Cancel</a>
            </div>
        </div>
    </div>
</div>

</x-content-layout>