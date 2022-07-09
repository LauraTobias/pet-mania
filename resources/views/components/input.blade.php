@props(['disabled' => false])

@php
$classes = ($disabled)
            ? 'rounded-md shadow-sm border-pink-300 bg-gray-200'
            : 'rounded-md shadow-sm border-pink-300 focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50';
@endphp

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $classes]) !!}>
