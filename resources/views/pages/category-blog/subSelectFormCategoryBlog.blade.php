@foreach ($data as $item)
    <option value="{{ $item->id }}" {{ !empty($categoryBlog) && optional($categoryBlog)->id == $item->id ? 'disabled' : '' }} {{ !empty($categoryBlog) && optional($categoryBlog)->parent_id == $item->id ? 'selected' : '' }}>
        {{ $level . ' | ' . $item->name }}
    </option>
    @if ($item->children->count() > 0)
        @include('pages.category-blog.subSelectFormCategoryBlog', ['data' => $item->children, 'level' => $level . '--'])
    @endif
@endforeach
