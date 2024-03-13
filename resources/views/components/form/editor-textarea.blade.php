@props(['lable' => '', 'value' => '', 'id' => ''])
<div>
    <label class="form-label" for="{{ $id }}"> {{ $lable }}</label>
    <textarea class="form-control" {{ $attributes }} id="{{ $id }}" data-value="{!! $value !!}"></textarea>
</div>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('{{ $id }}').on('instanceReady', function(event) {
        var editor = event.editor;
        var editorElement = editor.element.$;
        var value = editorElement.getAttribute('data-value'); // Lấy giá trị từ thuộc tính data-value
        editor.setData(value);
    });
</script>
