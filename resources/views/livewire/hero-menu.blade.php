<div class="">
    <div class="flex justify-start my-10 mx-5">
        <div class="mx-8 pb-2 border-b-2 border-transparent hover:border-gray-600 cursor-pointer">
            <a wire:click.lazy="$set('view', {{ \App\Http\Livewire\HeroMenu::POWER_STATS }})">Power Stats</a>
        </div>
        <div class="mx-8 pb-2 border-b-2 border-transparent hover:border-gray-600 cursor-pointer">
            <a wire:click.lazy="$set('view', 1)">Biography</a>
        </div>
        <div class="mx-8 pb-2 border-b-2 border-transparent hover:border-gray-600 cursor-pointer">
            <a>Appearance</a>
        </div>
        <div class="mx-8 pb-2 border-b-2 border-transparent hover:border-gray-600 cursor-pointer">
            <a>Work</a>
        </div>
        <div class="mx-8 pb-2 border-b-2 border-transparent hover:border-gray-600 cursor-pointer">
            <a>Connections</a>
        </div>
    </div>
    <div class="mx-16 py-1 text-sm">
        @if($view == \App\Http\Livewire\HeroMenu::POWER_STATS)
            <div class="flex flex-row">
                <div class="flex flex-col justify-start">
                    <h3>Intelligence: </h3>
                    <h3>Speed: </h3>
                    <h3>Durability: </h3>
                    <h3>Power: </h3>
                    <h3>Combat: </h3>
                </div>

                <div class="flex flex-col justify-start">
                    <div class="ml-3">{{ $hero->powerStats->intelligence ? $hero->powerStats->intelligence . '%' : 'unknown'}}</div>
                    <div class="ml-3">{{ $hero->powerStats->speed ? $hero->powerStats->speed . '%' : 'unknown'}}</div>
                    <div class="ml-3">{{ $hero->powerStats->durability ? $hero->powerStats->durability . '%' : 'unknown'}}</div>
                    <div class="ml-3">{{ $hero->powerStats->power ? $hero->powerStats->power . '%' : 'unknown'}}</div>
                    <div class="ml-3">{{ $hero->powerStats->combat ? $hero->powerStats->combat . '%' : 'unknown'}}</div>
                </div>

                <div class="flex flex-col w-full mt-1">
                    <div class="flex flex-row ">
                        @if($hero->powerStats->intelligence)
                            <div class="w-1/2 rounded-md ml-2 h-5">
                                <div class="bg-gray-600 rounded-full">
                                    <div style="width: {{$hero->powerStats->intelligence}}%"
                                         class="bg-purple-800 py-1 rounded-full"></div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="flex flex-row">
                        @if($hero->powerStats->speed)
                            <div class="w-1/2 rounded-md ml-2 h-5">

                                <div class="bg-gray-600 rounded-full">
                                    <div style="width: {{$hero->powerStats->speed}}%"
                                         class="bg-purple-800 py-1 rounded-full"></div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="flex flex-row">
                        @if($hero->powerStats->durability)
                            <div class="w-1/2 rounded-md ml-2 h-5">

                                <div class="bg-gray-600 rounded-full">
                                    <div style="width: {{$hero->powerStats->durability}}%"
                                         class="bg-purple-800 py-1 rounded-full"></div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="flex flex-row ">
                        @if($hero->powerStats->power)
                            <div class="w-1/2 rounded-md ml-2 h-5">

                                <div class="bg-gray-600 rounded-full">
                                    <div style="width: {{$hero->powerStats->power}}%"
                                         class="bg-purple-800 py-1 rounded-full"></div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="flex flex-row ">
                        @if($hero->powerStats->combat)
                            <div class="w-1/2 rounded-md ml-2 h-5">

                                <div class="bg-gray-600 rounded-full">
                                    <div style="width: {{$hero->powerStats->combat}}%"
                                         class="bg-purple-800 py-1 rounded-full"></div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @elseif($view == 1)
            {{--            <h1>{{ $name }}</h1>--}}
        @endif
    </div>
</div>


