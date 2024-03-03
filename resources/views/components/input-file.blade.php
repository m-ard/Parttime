<div>
    <label for="{{ $name }}" class="block font-medium text-sm text-gray-700">{{ '' }}</label>
    <input type="file" name="{{ $name }}" id="{{ $name }}" {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) }}>
    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
