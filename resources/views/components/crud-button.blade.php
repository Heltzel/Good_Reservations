<!-- resources/views/components/crud-button.blade.php -->
@props([
    'action' => 'create',
    'route' => '#',
    'class' => '',
    'confirm' => false,
])

@php
    $buttonText = ucfirst($action);
    $buttonClass = match ($action) {
        'create' => 'bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mx-1',
        'show' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-1',
        'edit' => 'bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mx-1',
        'delete' => 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mx-1',
        'page-nav' => 'bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mx-1',
        default => 'bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mx-1',
    };
@endphp

@if ($action === 'delete')
    <form action="{{ $route }}" method="POST" {{ $attributes->merge(['class' => 'inline-block']) }}>
        @csrf
        @method('DELETE')
        <button type="submit" class="{{ $class }} {{ $buttonClass }} mx-1"
            @if ($confirm) onclick="return confirm('Are you sure you want to delete this item?');" @endif>
            {{ $slot ?: $buttonText }}
        </button>
    </form>
@else
    <a href="{{ $route }}" class="{{ $class }} {{ $buttonClass }}" {{ $attributes }}>
        {{ $slot ?: $buttonText }}
    </a>
@endif
