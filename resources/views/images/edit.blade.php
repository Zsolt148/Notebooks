<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          <a class="text-blue-500" href="{{ route('images.index') }}">Galléria</a> / Új Kép feltöltése
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="p-5 pb-5 sm:px-10 bg-white border-b border-gray-200 text-xl">

                  <x-auth-validation-errors class="mb-4" :errors="$errors" />

                  <form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div>
                          <x-label for="name" value="Kép neve" />

                          <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$image->name" max="255" required autofocus />
                      </div>

                      <div class="mt-8">
                        <img alt="gallery"
                        class="block object-cover object-center max-h-40 rounded-lg shadow-xl"
                        src="{{ '../../' . $image->file }}">
                      </div>

                      <div class="mt-8">
                          <x-button>Frissítés</x-button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
