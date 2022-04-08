<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="text-blue-500" href="{{ route('notebooks.index') }}">Laptopok</a> / {{ $notebook->name }} szerkesztése
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-5 pb-5 sm:px-10 bg-white border-b border-gray-200 text-xl">

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form action="{{ route('notebooks.update', $notebook) }}" method="POST">
                        @csrf
                        @method('PUT')

                        @include('notebooks.form')

                        <div class="mt-8">
                            <x-button type="submit">Mentés</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
