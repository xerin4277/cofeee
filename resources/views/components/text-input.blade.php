@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' focus:border-amber-600 focus:ring-amber-500 rounded-md shadow-sm']) !!}>
