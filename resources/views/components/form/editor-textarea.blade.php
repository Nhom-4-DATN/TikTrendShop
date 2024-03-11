@props(['lable' => '', 'value' => '', 'id' => ''])
<div>
    <label class="form-label" for="{{ $id }}"> {{ $lable }}</label>
    <textarea class="form-control" {{ $attributes }} id="{{ $id }}">{{ $value }}</textarea>
</div>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('{{ $id }}');
</script>
