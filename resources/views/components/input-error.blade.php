@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-danger mt-1 small']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
