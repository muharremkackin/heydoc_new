@php
    $classes = [
        'green' => [
            'bg' => 'bg-green-100',
            'text' => 'text-green-800'
        ],
        'red' => [
            'bg' => 'bg-red-100',
            'text' => 'text-red-800'
        ],
        'blue' => [
            'bg' => 'bg-blue-100',
            'text' => 'text-blue-800'
        ],
        'gray' => [
            'bg' => 'bg-gray-100',
            'text' => 'text-gray-800'
        ],
        'yellow' => [
            'bg' => 'bg-yellow-100',
            'text' => 'text-yellow-800'
        ],
    ];
@endphp
<div class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $classes[$color]['bg'] }} {{ $classes[$color]['text'] }}">
    {{ $content }}
</div>
