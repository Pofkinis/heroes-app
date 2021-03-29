@extends('layouts.app')

@section('content')
    <div class="flex justify-center flex-wrap mt-5">
        @foreach($heroes as $hero)
            <div class="max-w-xs bg-gray-200 rounded overflow-hidden shadow-lg m-5  ">
                <img class="w-full h-96" src="{{ $hero->image }}" alt="{{ $hero->name }}">
                <div class="flex mx-7 justify-between">
                    <div class="px-2 py-4">
                        <div class="font-bold text-xl mb-2">{{ $hero->name }}</div>
                    </div>
                        <livewire:favorite-adding :hero="$hero"/>
                </div>
                <p class="text-grey-darker text-base text-start pb-1 px-5">
                    Publisher: {{ $hero->biography->publisher }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
