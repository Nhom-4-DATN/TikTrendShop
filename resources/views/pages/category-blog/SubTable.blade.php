@foreach ($data as $categoryBlog)
    <tr>
        <th scope="row"> {{ $index++ }}</th>
        <td>{{ $level . '| ' . $categoryBlog->name }}</td>
        <td>
            @if (!empty($categoryBlog->description))
                <div class="line-clamp-2" style="max-width: 200px;" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="{{ $categoryBlog->description }}">
                    {{ $categoryBlog->description }}
                </div>
            @endif
        </td>
        <td>0</td>
        <td>{{ $categoryBlog->created_at }}</td>
        <td>{{ $categoryBlog->status !== 1 ? 'Ẩn' : 'Hiển thị' }}</td>
        <td>
            <button type="button" class="btn btn-danger">
                <i class="bi  bi-trash3 fs-6 "></i>
                <span class="ms-1">Xóa</span>
            </button>
            <a href="{{ route('manager.blog.category.update', ['slug' => $categoryBlog->slug, 'id' => $categoryBlog->id]) }}" class="btn btn-warning ms-2">
                <i class="bi bi-pencil-square"></i>
                <span class="ms-1">Sửa</span>
            </a>
        </td>
    </tr>
    @if (count($categoryBlog->children) > 0)
        @include('pages.category-blog.SubTable', ['level' => $level . '--', 'data' => $categoryBlog->children])
    @endif
@endforeach
