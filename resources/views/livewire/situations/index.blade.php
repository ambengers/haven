<x-content-layout>

    <x-content-header>Situations</x-content-header>
    <div class="flex bg-gray-200 pb-6">
        <x-search-input wire:model="search"></x-search-input>
        <div class="flex w-full justify-end">
            <x-button-link href="{{ route('situations.create') }}">Create Situation</x-button-link>
        </div>
    </div>

    <div>
        <div class="py-4 px-3">
            Filters goes here..
        </div>
        <div>
            <table class="table w-full">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="w-16 py-4 px-3 text-center">&nbsp;</th>
                        <th class="text-left">ID</th>
                        <th class="text-left">Title</th>
                        <th class="text-left">Type</th>
                        <th class="text-left">Status</th>
                        <th class="w-32">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($situations as $situation)
                    <tr>

                        <td class="w-16 py-4 px-3">
                            <x-checkbox value="{{ $situation->id }}"></x-checkbox>
                        </td>
                        <td>{{ $situation->id }}</td>
                        <td>{{ $situation->title }}</td>
                        <td>{{ $situation->type }}</td>
                        <td>{{ $situation->status }}</td>
                        <td>
                            <div class="inline-flex items-center">
                                <x-view-link href="/situations/{{ $situation->id }}"></x-view-link>
                                <x-edit-link href="/situations/{{ $situation->id }}/edit"></x-edit-link>
                                <x-delete-button></x-delete-button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-content-layout>