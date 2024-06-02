@props(['bgColor'])

@php

 $bgColor = match ($bgColor) {

            'red'=> 'bg-red-200',
            'green'=> 'bg-green-200',
            'blue'=> 'bg-blue-200',
            default=> 'bg-green-200',

    };

@endphp

<button {{ $attributes }}
class="{{ $bgColor }}
        text-neutral-800 text-center
        rounded-xl px-2 text-sm justify-center  w-auto">
{{ $slot}}</button>
