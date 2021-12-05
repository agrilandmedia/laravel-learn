@props(['name', 'type' => 'text'])

<x-form.field-wrapper>
    <x-form.label name="{{ $name }}" />
    <input class="border border-gray-400 p-2 w-full rounded-md" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" {{ $attributes(['value' => old($name)]) }}>
    <x-form.error name="{{ $name }}" />
</x-form.field-wrapper>