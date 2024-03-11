@props(['src' => '', 'alt' => '', 'name' => ''])
<label {{ $attributes->class(['d-block  w-100 h-100 ', 'overflow-hidden'])->style(['cursor: pointer;']) }}>
    <div class="show-image w-100 h-100 ">
        <img class="img-fluid  w-100 h-100" src="{{ $src }}" alt="{{ $alt }}">
    </div>
    <input type="file" hidden accept="image/*" class="upload-image" name="{{ $name }}">
</label>
@vite('resources/js/form.js')
