<div class="relative flex items-center">
    <input type="text" name="search" wire:model="searchInput"
           class="w-56 md:w-64 lg:w-96 border-none bg-gray-100 rounded-xl h-10 focus:ring-0"
           placeholder="{{ __('Search...') }}"
           autocomplete="off"/>
    @if(!empty($searchInput))
        <button class="absolute ltr:right-3 rtl:left-3" wire:click="clear">
            <i class="bx bx-x-circle text-gray-400"></i>
        </button>
    @endif

    <div>
        @if (!empty($results) and !empty($searchInput) and $end)
            <ul class="absolute w-56 md:w-64 lg:w-96 bg-white p-2 border border-neutral-300 z-10 rounded-lg shadow-xl left-0 top-10">
                @forelse($results as $result)
                    <li class="flex flex-row w-full p-3 items-center text-sm hover:bg-gray-100 cursor-pointer"
                        wire:key="user-{{ $result->id }}"
                        wire:click="goto('{{ $result->id }}')">
                        {{$result->address}}


                    </li>
                @empty
                    <li class="w-full p-3 text-center">
                        {{ __('There are no results') }}
                    </li>
                @endforelse

            </ul>
        @endif
    </div>

</div>