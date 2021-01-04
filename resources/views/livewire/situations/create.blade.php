<x-content-layout>
    <div>
        <x-content-header>Situations</x-content-header>

        <x-form-control title="Title *">
            <input
                type="text"
                dusk="title"
                wire:model="title"
                class="w-full focus:outline-none focus:text-gray-600 p-2" placeholder="Name of the situation.."
            />
        </x-form-control>

        <x-form-control title="Type *">
            <select
                dusk="type"
                class="w-full focus:outline-none focus:text-gray-600 p-2"
                wire:model="type"
            >
                <option>Select Situation Type..</option>
                <option value="flood">Flood</option>
                <option value="earthquake">Earthquake</option>
                <option value="fire">Fire</option>
            </select>
        </x-form-control>

        <x-form-control title="Donation Information">
            <textarea
                rows="5"
                wire:model="donationInformation"
                dusk="donationInformation"
                class="w-full focus:outline-none focus:text-gray-600 p-2"
            ></textarea>
        </x-form-control>

        <div class="bg-white space-y-6 border-b border-gray-200 pt-2 pb-6">
            <div class="inline-flex space-y-4 space-y-0 w-full p-4 text-gray-700 items-center">
                <h2 class="md:w-1/4 max-w-sm mx-auto">&nbsp</h2>
                <div class="md:w-3/4 max-w-3xl">
                    <div class="w-full">
                        <button
                            class="text-white mx-auto max-w-sm rounded-md text-center bg-blue-500 py-2 px-4 focus:outline-none mr-4"
                            dusk="create"
                            wire:click="create"
                        >
                            Create
                        </button>

                        <a href="{{ route('situations.index') }}" class="text-gray-600 hover:underline">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-content-layout>