<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @auth
                Welcome to the page {{ auth()->user()->name }}!
            @else
                Welcome to the page!
            @endauth
        </h2>
    </x-slot>

    <div class="relative">
        <video width="1920" height="1080" autoplay muted loop class="relative z-0">
            <source src="{{URL::asset('videos/intro.mp4')}}" type="video/mp4">
            A böngésződ nem támogatja a videó lejátszást!
        </video>
        <div class="absolute top-2 md:top-1/4 left-10 md:left-80 z-10 text-white">
            <p class="text-xl md:text-5xl">Welcome to the page!</p>
            <p class="mt-4">Made by: Zsolt Budai, Kristóf Vogyák</p>

            <div class="mt-20 max-w-xl">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </div>
        </div>
    </div>
</x-app-layout>
