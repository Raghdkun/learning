@props(['label', 'type' => 'text', 'name', 'required' => false])

<div class="input-group">
    <label for="{{ $name }}">{{ $label }}:</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" @if($required) required @endif>
</div>
