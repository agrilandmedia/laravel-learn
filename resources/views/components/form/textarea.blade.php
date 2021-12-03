@props(['name'])

<x-form.field-wrapper>
    <x-form.label name="{{ $name }}" />
    <textarea name="{{ $name }}" cols="25" rows="5" class="border border-gray-400 w-full rounded-md" value="{{ old($name) }}"></textarea>
    <x-form.error name="{{ $name }}" />
</x-form.field-wrapper>