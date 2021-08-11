<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Endereços') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            @if (!isset($address) || $address != null)
                @include('address.form-edit-address')
            @else
                @include('address.form-insert-address')
            @endif
            <x-jet-section-border />
        </div>
    </div>
</x-app-layout>
