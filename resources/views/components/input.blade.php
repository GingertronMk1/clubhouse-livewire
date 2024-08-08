@props([
    'type' => 'text',
    'name',
    'options' => [],
    'valueFn' => fn ($input) => $input->id,
    'textFn' => fn ($input) => $input->name,
    'canBeNull' => false,
    'label' => null,
])

@php
    $label ??= ucwords(preg_replace('/[^A-Za-z0-9]/', ' ', $name));

    $id = \Symfony\Component\Uid\UuidV7::generate()
@endphp

<label for="{{ $id }}" class="flex flex-col">
    <span>
        {{ $label }}

        @error($name)
            <span class="error">{{ $message }}</span>
        @enderror
    </span>

    @switch($type)
        @case('textarea')
            <textarea name="{{ $name }}" id="{{ $id }}" {{ $attributes }}></textarea>
        @break
        @case('select')
            <select id="{{ $id }}" {{ $attributes }}>
                @if($canBeNull)
                    <option value="">---</option>
                @endif
                @foreach($options as $option)
                        <option value="{{ $valueFn($option) }}">{{ $textFn($option) }}</option>
                @endforeach
            </select>
        @break
        @default
            <input name="{{ $name }}" type="{{ $type }}" id="{{ $id }}" {{ $attributes }}/>
    @endswitch
</label>
