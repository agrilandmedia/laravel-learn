@props(['name'])

@error($name)
    <p class="text-red-400 text-md mt-2 italic">{{ $message }}</p>
@enderror