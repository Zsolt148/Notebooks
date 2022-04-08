<div class="mt-3">
    <x-label for="manufacturer" value="Gyártó" />
    <x-input id="manufacturer" class="block mt-1 w-full" type="text" name="manufacturer" value="{{ old('manufacturer', isset($notebook) ? $notebook->manufacturer : '') }}" max="255" required autofocus />
</div>

<div class="mt-3">
    <x-label for="type" value="Típus" />
    <x-input id="type" class="block mt-1 w-full" type="text" name="type" value="{{ old('type', isset($notebook) ? $notebook->type : '') }}" max="255" required autofocus />
</div>

<div class="mt-3">
    <x-label for="display" value="Kijelző" />
    <x-input id="display" class="block mt-1 w-full" type="text" name="display" value="{{ old('display', isset($notebook) ? $notebook->display : '') }}" max="255" required autofocus />
</div>

<div class="mt-3">
    <x-label for="memory" value="Memória" />
    <x-input id="memory" class="block mt-1 w-full" type="number" name="memory" value="{{ old('memory', isset($notebook) ? $notebook->memory : '') }}" required autofocus />
</div>

<div class="mt-3">
    <x-label for="harddisk" value="Merevlemez" />
    <x-input id="harddisk" class="block mt-1 w-full" type="number" name="harddisk" value="{{ old('harddisk', isset($notebook) ? $notebook->harddisk : '') }}" required autofocus />
</div>

<div class="mt-3">
    <x-label for="videocontroller" value="VGA" />
    <x-input id="videocontroller" class="block mt-1 w-full" type="text" name="videocontroller" value="{{ old('videocontroller', isset($notebook) ? $notebook->videocontroller : '') }}" max="255" required autofocus />
</div>

<div class="mt-3">
    <x-label for="processor_id" value="Processzor" />
    <select name="processor_id"
            id="processor_id"
            class="block w-full px-4 py-2 bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:ring-0"
            required>
        <option value="">Válassz</option>
        @foreach($processors as $processor)
            <option value="{{ $processor->id }}" @if(old('processor_id', isset($notebook) ? $notebook->processor_id : false) == $processor->id) selected @endif>{{ $processor->name }}</option>
        @endforeach
    </select>
</div>

<div class="mt-3">
    <x-label for="opsystem_id" value="OP. rendszer" />
    <select name="opsystem_id"
            id="opsystem_id"
            class="block w-full px-4 py-2 bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:ring-0"
            required>
        <option value="">Válassz</option>
        @foreach($opsystems as $op)
            <option value="{{ $op->id }}" @if(old('opsystem_id', isset($notebook) ? $notebook->opsystem_id : false) == $op->id) selected @endif>{{ $op->name }}</option>
        @endforeach
    </select>
</div>

<div class="mt-3">
    <x-label for="price" value="Ár" />
    <x-input id="price" class="block mt-1 w-full" type="number" name="price" value="{{ old('price', isset($notebook) ? $notebook->price : '') }}" required autofocus />
</div>

<div class="mt-3">
    <x-label for="pieces" value="Darab" />
    <x-input id="pieces" class="block mt-1 w-full" type="number" name="pieces" value="{{ old('pieces', isset($notebook) ? $notebook->pieces : '') }}" required autofocus />
</div>
