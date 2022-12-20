
<div class="mt-8">
    <ol class="relative border-l border-gray-200">
        @foreach ($posts as $post)
        <li class="mb-10 ml-6">
            <span
                class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white">
                <img class="rounded-full shadow-lg" src="{{ asset('images') }}/profile.jpg"
                    alt="Thomas Lean image" />
            </span>
            <div class="py-2 px-4 bg-white rounded-lg border border-gray-200 shadow-sm">
                <div class="justify-between items-center sm:flex">
                    <div class="flex justify-start">
                        <div class="text-sm font-normal text-gray-500 flex"><a href="#"
                                class="font-semibold text-gray-900 hover:underline">{{ $post->user->name }}</a>
                        </div>
                        <time class="mt-[0.05rem] ml-2 text-xs font-normal text-gray-400 sm:mb-0">
                            {{ $post->updated_at->diffForHumans() }}
                        </time>
                    </div>
                    <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal{{ $post->id }}"
                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none"
                        type="button">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                        </svg>
                    </button>
                    
                    <!-- Dropdown menu -->
                    <div id="dropdownDotsHorizontal{{ $post->id }}" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
                        <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownMenuIconHorizontalButton">
                            <li>
                                <a wire:click="showUpdateForm({{ $post->id }})" class="block py-2 px-4 hover:bg-gray-100">Edit</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a wire:click="delete({{ $post->id }})" class="block py-2 px-4 text-sm text-red-700 hover:bg-gray-100">Delete</a>
                        </div>
                    </div>
                </div>
            @if($updateStateId !== $post->id)
            <div class="mb-3 text-sm font-normal text-gray-600">
                    {{$post->body}}
            </div>
            @else
            <textarea wire:model="body" id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
            <div class="text-right mt-4">
                <button wire:click="update({{ $post->id }})" type="submit"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update
                </button>
            </div>
            @endif
            </div>
        </li>
        @endforeach
    </ol>
</div>