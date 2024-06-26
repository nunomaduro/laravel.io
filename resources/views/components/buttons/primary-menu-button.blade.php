@props([
    'tag' => 'a',
    'selected' => false,
])

<{{ $tag }}
    {{ $attributes }}
    class="@if($selected) text-lio-500 @endif flex rounded-full p-3 transition duration-300 ease-in-out hover:bg-lio-100 hover:text-lio-500 hover:opacity-50"
>
    {{ $slot }}
</{{ $tag }}>
