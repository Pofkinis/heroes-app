@extends('layouts.app')

@section('content')
    <div class="py-5 px-10 flex space-around items-center">
        <img class="rounded-full w-60 h-60"  src="{{ $hero->image }}" alt="{{ $hero->name }}">
        <div class="flex flex-row items-center pl-10">
            <div class=" text-3xl">{{ $hero->name }}</div>
            @auth()
                <livewire:favorite-adding :hero="$hero"/>
            @endguest
        </div>
    </div>
    <div>
        <hr class="mx-10 w-auto h-1 bg-gray-500 border-0 hover:bg-gray-800 rounded-md">

        <livewire:hero-menu :hero="$hero"/>
    </div>

@endsection
