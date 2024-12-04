@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-warning focus:ring-warning rounded-md shadow-sm']) !!}>
