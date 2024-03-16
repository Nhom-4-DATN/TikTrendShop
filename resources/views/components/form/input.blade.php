@props(['lable' => '', 'id', 'type' => 'text', 'name', 'value' => ''])
<label for="{{ $id ?? '' }}" class="form-label ">{{ $lable }}</label>
<input type="{{ $type }}" id="{{ $id ?? '' }}" name="{{ $name }}" {{ $attributes->class(['form-control']) }} value="{{ $value ?? old($name) }}">
@error($name)
    <div class="fs-6 text-danger ">
        {{ $message }}
    </div>
@enderror
