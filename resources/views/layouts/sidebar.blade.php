<div class="w-2/12 bg-white p-3">
    <ul class="space-y-2 text-sm">
        <li>
            <a
                href="{{ route('situations.index') }}"
                class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-indigo-200 focus:shadow-outline {{ request()->routeIs('situations.*') ? 'bg-indigo-200' : '' }}"
            >
                <span class="text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </span>
                <span>Situations</span>
            </a>
        </li>
    </ul>
</div>