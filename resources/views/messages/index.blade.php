<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Összes üzenet
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
                        <div class="text-xl font-medium ml-3">{{session('status')}}</div>
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

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto mt-6">
                <div class="my-2">
                    {{$messages->links()}}
                </div>
                <table class="table-auto border-collapse w-full">
                    <thead>
                    <tr class="font-medium text-gray-700 dark:text-white text-left">
                        <th class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-tl-2xl">#ID</th>
                        <th class="px-4 py-2 bg-gray-200 dark:bg-gray-700">Email</th>
                        <th class="px-4 py-2 bg-gray-200 dark:bg-gray-700">Küldő neve</th>
                        <th class="px-4 py-2 bg-gray-200 dark:bg-gray-700">Üzenet</th>
                        <th class="px-4 py-2 bg-gray-200 dark:bg-gray-700">Lakhely</th>
                        <th class="px-4 py-2 bg-gray-200 dark:bg-gray-700">Dátum</th>
                        <th class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-tr-2xl">Műveletek</th>
                    </tr>
                    </thead>
                    <tbody class="text-sm font-normal text-gray-700">
                    @forelse($messages as $message)
                        <tr class="@if($loop->odd) bg-white dark:bg-gray-600 @else bg-gray-50 dark:bg-gray-700 @endif @if(!$message->read) font-bold @endif hover:bg-gray-100 dark:hover:bg-gray-500 border-b border-gray-400 py-10">
                            <td class="px-4 py-2 dark:text-white">{{ $message->id }}</td>
                            <td class="px-4 py-2 dark:text-white">{{ $message->email }}</td>
                            <td class="px-4 py-2 dark:text-white">{{ $message->sent_by }}</td>
                            <td class="px-4 py-2 dark:text-white">{{ $message->text }}</td>
                            <td class="px-4 py-2 dark:text-white">@if($message->location == 'hun') Mo. @else Más @endif</td>
                            <td class="px-4 py-2 dark:text-white">{{ $message->created_at->format('Y.m.d H:i') }}</td>
                            <td class="px-4 py-2 dark:text-white">
                                {{-- <form class="inline-block" action="{{route('message.update', $message)}}" method="POST" >
                                    @csrf
                                    @method('PUT')
                                    <x-button class="bg-blue-500" @disabled(true) >Olvasottnak jelöl</x-button>
                                </form> --}}
                                @if(!$message->read)
                                    <form class="inline-block" action="{{route('message.update', $message)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <x-button class="bg-blue-500" >Olvasottnak jelöl</x-button>
                                    </form>
                                @endif
                                <form class="inline-block" action="{{route('message.destroy', $message)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-button class="bg-red-500" >Törlés</x-button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr class="bg-white py-10">
                            <td colspan="7" class="px-4 py-5 dark:text-white text-lg">Nem jött még üzenet!</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-app-layout>
