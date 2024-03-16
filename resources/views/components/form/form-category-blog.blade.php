<x-form.index class="form-submit" action="{{ !empty($categoryBlog->id) ? route('manager.category-blog.update', ['id' => $categoryBlog->id, 'slug' => $categoryBlog->slug]) : route('manager.category-blog.create') }}" :method="!empty($categoryBlog->id) ? 'PUT' : 'POST'">
    <div>
        <x-form.input lable="tên danh mục" id="name" name="name" value="{{ $categoryBlog->name ?? old('name') }}" />
    </div>
    <div class="mt-4">
        <x-form.select lable="danh mục cha" id="name" name="parent_id">
            <option value="">Cấp lớn nhất</option>
            @foreach ($categoryBlogList as $item)
                <option value="{{ $item->id }}"{{ optional($categoryBlog)->id === $item->id ? 'disabled' : '' }} {{ optional($categoryBlog)->parent_id === $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                @if ($item->children->count() > 0)
                    @include('pages.category-blog.subSelectFormCategoryBlog', ['data' => $item->children, 'level' => '--'])
                @endif
            @endforeach
        </x-form.select>
    </div>
    <div class="mt-4">
        <x-form.textarea lable="mô tả danh mục" name="description" style="height: 200px;" :value="$categoryBlog->description ?? old('description')" />
    </div>
    <button type="submit" class="btn btn-primary mt-4"> {{ !empty($categoryBlog->id) ? 'cập nhập danh mục' : 'tạo danh mục' }}</button>
</x-form.index>
