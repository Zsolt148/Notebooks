<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Notebooks
            @auth - <a href="{{route('notebooks.create')}}" class="text-blue-500">New notebook</a> @endauth
        </h2>
    </x-slot>

    <div class="py-8">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('status'))
                <div class="mb-5 justify-center" x-data="{ open: true }" x-show="open">
                    <div class="flex sm:flex-row sm:items-center bg-white dark:bg-gray-600 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6">
                        <div class="flex flex-row items-center border-b sm:border-b-0 w-1/2 sm:w-auto pb-4 sm:pb-0">
                            <div class="text-green-500">
                                <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div class="text-xl font-medium ml-3">{{ session('status') }}</div>
                        </div>
                        <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-600 dark:text-gray-200 hover:text-gray-800 dark:hover:text-white cursor-pointer" @click="open = false">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </div>
                    </div>
                </div>
            @endif

            <form action="{{ route('notebooks.index') }}" method="GET">
                <div class="mb-6 flex w-full justify-between items-center">
                    <input class="relative w-full px-4 py-1 rounded-md border-gray-300 dark:border-gray-600 mr-2" type="text" name="search" placeholder="Search"
                           value="{{ old('search', request('search')) }}"
                    />
                    <x-button type="submit" class="bg-blue-500">
                        Search
                    </x-button>
                    <x-button type="button" class="bg-red ml-2">
                        <a href="{{ route('notebooks.index') }}">
                            Reset
                        </a>
                    </x-button>
                </div>
            </form>
            <div class="p-5 pb-5 sm:px-10 bg-white border-b border-gray-200 shadow-xl rounded">
                <div class="my-5">
                    {{$notebooks->withQueryString()->links()}}
                </div>
                <div class="overflow-x-auto mt-6">
                    <table class="w-full whitespace-nowrap">
                        <tr class="text-left font-bold">
                            <th class="px-6 pt-6 pb-4">
                                <span class="inline-flex w-full justify-between cursor-pointer">
                                    Manufacturer
                                </span>
                            </th>
                            <th class="px-6 pt-6 pb-4">
                                <span class="inline-flex w-full justify-between cursor-pointer">
                                    Type
                                </span>
                            </th>
                            <th class="px-6 pt-6 pb-4">
                                <span class="inline-flex w-full justify-between cursor-pointer">
                                    Display
                                </span>
                            </th>
                            <th class="px-6 pt-6 pb-4">
                                <span class="inline-flex w-full justify-between cursor-pointer">
                                    Memory
                                </span>
                            </th>
                            <th class="px-6 pt-6 pb-4">
                                <span class="inline-flex w-full justify-between cursor-pointer">
                                    Harddrive
                                </span>
                            </th>
                            <th class="px-6 pt-6 pb-4">
                                <span class="inline-flex w-full justify-between cursor-pointer">
                                    VGA
                                </span>
                            </th>
                            <th class="px-6 pt-6 pb-4">
                                <span class="inline-flex w-full justify-between cursor-pointer">
                                    Price
                                </span>
                            </th>
                            <th class="px-6 pt-6 pb-4">
                                <span class="inline-flex w-full justify-between cursor-pointer">
                                    Processor
                                </span>
                            </th>
                            <th class="px-6 pt-6 pb-4">
                                <span class="inline-flex w-full justify-between cursor-pointer">
                                    OP system
                                </span>
                            </th>
                            <th class="px-6 pt-6 pb-4">
                                <span class="inline-flex w-full justify-between cursor-pointer">
                                    Piece
                                </span>
                            </th>
                            @auth
                                <th class="px-6 pt-6 pb-4" colspan="2">
                                    Actions
                                </th>
                            @endauth
                        </tr>
                        @forelse($notebooks as $notebook)
                            <tr class="hover:bg-gray-100 focus:outline-none">
                                <td class="border-t dark:border-gray-400">
                                    <span class="px-6 py-2 flex items-center focus:outline-none">
                                        {{ $notebook->manufacturer }}
                                    </span>
                                </td>
                                <td class="border-t dark:border-gray-400">
                                    <span class="px-6 py-2 flex items-center focus:outline-none">
                                        {{ $notebook->type }}
                                    </span>
                                </td>
                                <td class="border-t dark:border-gray-400">
                                    <span class="px-6 py-2 flex items-center focus:outline-none">
                                        {{ $notebook->display }}
                                    </span>
                                </td>
                                <td class="border-t dark:border-gray-400">
                                    <span class="px-6 py-2 flex items-center focus:outline-none">
                                        {{ $notebook->memory }}
                                    </span>
                                </td>
                                <td class="border-t dark:border-gray-400">
                                    <span class="px-6 py-2 flex items-center focus:outline-none">
                                        {{ $notebook->harddisk }}
                                    </span>
                                </td>
                                <td class="border-t dark:border-gray-400">
                                    <span class="px-6 py-2 flex items-center focus:outline-none">
                                        {{ $notebook->videocontroller }}
                                    </span>
                                </td>
                                <td class="border-t dark:border-gray-400">
                                    <span class="px-6 py-2 flex items-center focus:outline-none">
                                        {{ $notebook->price }}
                                    </span>
                                </td>
                                <td class="border-t dark:border-gray-400">
                                    <span class="px-6 py-2 flex items-center focus:outline-none">
                                        {{ $notebook->processor->name }}
                                    </span>
                                </td>
                                <td class="border-t dark:border-gray-400">
                                    <span class="px-6 py-2 flex items-center focus:outline-none">
                                        {{ $notebook->opsystem->name }}
                                    </span>
                                </td>
                                <td class="border-t dark:border-gray-400">
                                    <span class="px-6 py-2 flex items-center focus:outline-none">
                                        {{ $notebook->pieces }}
                                    </span>
                                </td>
                                @auth
                                    <td class="border-t dark:border-gray-400 flex space-x-2">
                                        <a href="{{ route('notebooks.edit', $notebook) }}">
                                            <x-button>
                                                Edit
                                            </x-button>
                                        </a>
                                        <form action="{{ route('notebooks.destroy', $notebook) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <x-button type="submit" class="bg-red-400">
                                                Delete
                                            </x-button>
                                        </form>
                                    </td>
                                @endauth
                            </tr>
                        @empty
                            <div class="px-6 py-2 flex items-center focus:outline-none">
                                Not found
                            </div>
                        @endforelse
                    </table>
                </div>
                <div class="my-5">
                    {{$notebooks->withQueryString()->links()}}
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
