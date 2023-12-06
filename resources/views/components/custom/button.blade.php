
@props(['class' => 'bg-blue-900 text-white rounded-lg px-4 py-3'])

@php
    $tagAttributes = $attributes->merge($attributes->only(['class']))->except(['class']);
@endphp

<a {{ $tagAttributes->merge(['class' => $class]) }} {{ $attributes }}>
    {{ $slot }}
</a>
