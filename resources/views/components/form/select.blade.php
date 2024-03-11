@props(['id' => '', 'lable' => ''])

<label for="{{ $id }}" class="form-label ">{{ $lable }}</label>
<select {{ $attributes->class(['form-select']) }}>
    {{ $slot }}
</select>
