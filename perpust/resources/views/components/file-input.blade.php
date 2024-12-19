<div>
    @if($label)
        <x-input-label :for="$id" :value="$label" />
    @endif

    <input type="file" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" @if($required) required @endif class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />

    <x-input-error :messages="$errors->get($name)" class="mt-2" />
</div>
