<div class="input-group">
    <label for="{{ $name }}">{{ $label }}:</label>
    <select id="{{ $name }}" name="{{ $name }}">
        @foreach ($options as $option)
            <option value="{{ $option }}" @if(isset($selected) && $selected == $option) selected @endif>
                {{ $option }}
            </option>
        @endforeach
    </select>
</div>
