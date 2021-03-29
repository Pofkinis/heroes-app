<div class="flex flex-col items-center">
    <div class="group cursor-pointer relative inline-block w-14 text-center">
        <button wire:click="addOrRemove" class="focus:outline-none active:bg-green-700 mt-1" wire:loading.remove>
            @if($favorite)
                <div class="lock">
                    <i class='fas fa-heart fa-2x icon-unlock'></i>
                    <i class='fas fa-heart-broken fa-2x icon-lock'></i>
                </div>
            @else
                <div class="lock">
                    <i class='far fa-heart fa-2x icon-unlock'></i>
                    <i class='fas fa-heart fa-2x icon-lock'></i>
                </div>
            @endif
            <div class="opacity-0 w-28 bg-black text-white text-center text-xs rounded-lg py-2 absolute z-10 group-hover:opacity-100 bottom-full -left-1/2  px-1 pointer-events-none">
                @if($favorite)
                    Remove from favorites
                @else
                    Add to favorites
                @endif
                <svg class="absolute text-black h-2 w-full left-0 top-full" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"/></svg>
            </div>
        </button>
        <div wire:loading>
            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
        </div>

    </div>

{{--    <div wire:loading class="mx-1">--}}
{{--        <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">--}}
{{--            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>--}}
{{--            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>--}}
{{--        </svg>--}}
{{--    </div>--}}
</div>
