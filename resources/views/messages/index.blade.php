<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Összes üzenet
        </h2>
    </x-slot>

    <div class="py-8">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-5 pb-5 sm:px-10 bg-white border-b border-gray-200 text-xl shadow-xl rounded">
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
                            <th class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-tr-2xl">Dátum</th>
                        </tr>
                        </thead>
                        <tbody class="text-sm font-normal text-gray-700">
                        @forelse($messages as $message)
                            <tr class="@if($loop->odd) bg-white dark:bg-gray-600 @else bg-gray-50 dark:bg-gray-700 @endif hover:bg-gray-100 dark:hover:bg-gray-500 border-b border-gray-400 py-10">
                                <td class="px-4 py-2 dark:text-white">{{ $message->id }}</td>
                                <td class="px-4 py-2 dark:text-white">{{ $message->email }}</td>
                                <td class="px-4 py-2 dark:text-white">{{ $message->sent_by }}</td>
                                <td class="px-4 py-2 dark:text-white">{{ $message->text }}</td>
                                <td class="px-4 py-2 dark:text-white">@if($message->location == 'hun') Mo. @else Más @endif</td>
                                <td class="px-4 py-2 dark:text-white">{{ $message->created_at->format('Y.m.d H:i') }}</td>
                            </tr>
                        @empty
                            <tr class="bg-white dark:bg-gray-600 border-b border-gray-400 py-10">
                                <td colspan="6" class="px-4 py-5 dark:text-white text-lg">Nem jött még üzenet!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
