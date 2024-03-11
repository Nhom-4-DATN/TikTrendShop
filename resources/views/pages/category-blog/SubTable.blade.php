@foreach ($data as $categoryBlog)
    <tr>
        <th scope="row">
            <div class="form-check text-center ">
                <input class="form-check-input" type="checkbox" value="">
            </div>
        </th>
        <th> {{ $index++ }}</th>
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
            <div class="d-flex justify-content-end ">
                <form action="{{ route('manager.category.delete', ['slug' => $categoryBlog->slug, 'id' => $categoryBlog->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">
                        <i class="bi  bi-trash3 fs-6 "></i>
                        <span class="ms-1">Xóa</span>
                    </button>
                </form>
                <a href="{{ route('manager.category.update', ['slug' => $categoryBlog->slug, 'id' => $categoryBlog->id]) }}" class="btn btn-warning ms-2">
                    <i class="bi bi-pencil-square"></i>
                    <span class="ms-1">Sửa</span>
                </a>
            </div>
        </td>
    </tr>
    @if (count($categoryBlog->children) > 0)
        @include('pages.category-blog.SubTable', ['level' => $level . '--', 'data' => $categoryBlog->children])
    @endif
@endforeach
