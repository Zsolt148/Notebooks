<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Send message
        </h2>
    </x-slot>

    @if(session('status'))
        <div class="my-10 mx-auto max-w-2xl justify-center" x-data="{ open: true }" x-show="open">
            <div class="flex sm:flex-row sm:items-center bg-white dark:bg-gray-600 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6">
                <div class="flex flex-row items-center border-b sm:border-b-0 w-1/2 sm:w-auto pb-4 sm:pb-0">
                    <div class="text-green-500">
                        <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="text-xl font-medium ml-3">Successfuly sent the message</div>
                </div>
                <div class="text-sm tracking-wide text-gray-600 dark:text-gray-200 mt-4 sm:mt-0 sm:ml-4">Thank you!</div>
                <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-600 dark:text-gray-200 hover:text-gray-800 dark:hover:text-white cursor-pointer" @click="open = false">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </div>
            </div>
        </div>
    @endif

    <section class="w-full max-w-2xl px-6 py-4 mx-auto bg-white rounded-md shadow-xl mt-10">
        <div class="flex justify-center">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>
        <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">Contact us!</h2>
        <p class="mt-3 text-center text-gray-600 dark:text-gray-400">If you have any question, ask as!</p>

        <form action="{{route('message.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="mt-6">
                <div class="items-center -mx-2 md:flex">
                    <div class="w-full mx-2">
                        <label class="block mb-2 text-sm font-medium text-gray-600">Name</label>

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                  required autofocus/>
                    </div>

                    <div class="w-full mx-2 mt-4 md:mt-0">
                        <label class="block mb-2 text-sm font-medium text-gray-600">E-mail address</label>

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                 required autofocus/>
                    </div>
                </div>

                <div class="w-full mt-4">
                    <label for="email" class="block text-sm leading-7 text-gray-600">Country</label>
                    <select name="location"
                            id="location"
                            class="block w-full px-4 py-2 bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:ring-0"
                            required>
                        <option selected value="hun">Hungary</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="w-full mt-4">
                    <label class="block mb-2 text-sm font-medium text-gray-600">Message</label>
                    <textarea name="text"
                              id="text"
                              class="block w-full h-40 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                              required>{{old('text')}}</textarea>
                </div>

                <div class="flex justify-center mt-6">
                    <x-button class="text-xl normal-case">
                        Send
                    </x-button>
                </div>
            </div>
        </form>
    </section>
</x-app-layout>

