<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Endereços') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            @if (!isset($movie) || $movie != null)
                @include('favorite-movie.form-edit-movie')
            @else
                @include('favorite-movie.form-insert-movie')
            @endif
            <x-jet-section-border />
        </div>
    </div>
</x-app-layout>
