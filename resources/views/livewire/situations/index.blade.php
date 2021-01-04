<x-content-layout>

    <x-content-header>Situations</x-content-header>
    <div class="flex bg-gray-200">
        <x-search-input></x-search-input>
        <div class="flex w-full justify-end my-6">
            <x-button-link href="{{ route('situations.create') }}">Create Situation</x-button-link>
        </div>
    </div>

    <div>
        <table class="table-auto">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($situations as $situation)
                <tr>
                    <td>{{ $situation->title }}</td>
                    <td>{{ $situation->type }}</td>
                    <td>{{ $situation->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-content-layout>