<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="text-blue-500" href="{{ route('images.index') }}">Galléria</a> / {{ $image->name }}
        </h2>
    </x-slot>

    <div class="py-8">
        @if (session('status'))
            <div class="my-10 mx-auto max-w-7xl sm:px-6 justify-center" x-data="{ open: true }" x-show="open">
                <div
                    class="flex sm:flex-row sm:items-center bg-white dark:bg-gray-600 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6">
                    <div class="flex flex-row items-center border-b sm:border-b-0 w-1/2 sm:w-auto pb-4 sm:pb-0">
                        <div class="text-green-500">
                            <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="text-xl font-medium ml-3">Sikeres képfeltöltés</div>
                    </div>
                    <div class="text-sm tracking-wide text-gray-600 dark:text-gray-200 mt-4 sm:mt-0 sm:ml-4">Köszönjük!
                    </div>
                    <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-600 dark:text-gray-200 hover:text-gray-800 dark:hover:text-white cursor-pointer"
                        @click="open = false">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>
                </div>
            </div>
        @endif

        @guest
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-5 pb-5 sm:px-10 bg-white border-b border-gray-200 text-xl">
                        A galléria képfeltöltés funkcióját csak bejelentkezés után tudja használni!
                        <a href="{{ route('login') }}" class="underline text-blue-500">Bejelentkezés</a>
                    </div>
                </div>
            </div>
        @endguest

        <section class="overflow-hidden text-gray-700 body-font">
            <div class="sm:px-5 py-2 mx-auto max-w-7xl">
                <div class="flex flex-col">
                    <div class="flex flex-wrap w-1/2">
                        <span class="w-full text-center py-2 text-xl font-bold">{{ $image->name }}</span>
                        <div class="w-full p-1 md:p-3">
                            <img alt="gallery"
                                class="block object-cover object-center w-full h-full rounded-lg shadow-xl"
                                src="{{ \Illuminate\Support\Facades\Storage::url($image->file) }}">
                        </div>
                    </div>
                    <div class="flex justify-evenly w-1/2 items-center" >
                        <a href="{{ route('images.edit', $image) }}">
                            <x-button class="bg-blue-400">Frissítés</x-button>
                        </a>
                        <form action="{{ route('images.destroy', $image) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-button class="bg-red-400">Törlés</x-button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-app-layout>
