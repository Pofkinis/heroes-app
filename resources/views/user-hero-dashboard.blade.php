@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="text-success">{{ session('success') }}</div>
    @endif
    <div class="grid justify-items-end mx-10 mt-5">
        <form action="{{ route('heroes.create') }}">
            <button
                class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline"
            >
                Create new hero
            </button>
        </form>
    </div>

    <div class="py-5 mx-10 flex flex-col">
        <table class="min-w-max w-full table-auto">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Name</th>
                <th class="py-3 px-6 text-left">Full name</th>
                <th class="py-3 px-6 text-center">Created at</th>
                <th class="py-3 px-6 text-center">Updated at</th>
                <th class="py-3 px-6 text-center">Actions</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
        @forelse($heroes as $hero)
            <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                <td class="py-3 px-6 text-left">
                    <div class="flex items-center">
                        <div class="mr-2">
                            <img class="w-10 h-10" src="{{ asset('storage/' . $hero->image) }}" />
                        </div>
                        <span class="font-medium">{{ $hero->name }}</span>
                    </div>
                </td>
                <td class="py-3 px-6 text-left">
                    <div class="flex items-center">
                        <span>{{ $hero->biography->full_name }}</span>
                    </div>
                </td>
                <td class="py-3 px-6 text-center">
                    {{ $hero->created_at }}
                </td>
                <td class="py-3 px-6 text-center">
                    {{ $hero->updated_at }}
                </td>
                <td class="py-3 px-6 text-center">
                    <div class="flex item-center justify-center">
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <a href="{{ route('heroes.show', $hero->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>
                        </div>
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <a href="{{ route('heroes.edit', $hero) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>
                        </div>
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <form method="POST" action="{{ route('heroes.destroy', $hero) }}">
                                @method('DELETE')
                                @csrf

                                <button class="" type="submit">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @empty
            <p>You don't have any heroes created yet</p>
        @endforelse
            </tbody>
        </table>
    </div>
@endsection
