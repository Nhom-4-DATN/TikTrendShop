@php
    $tableTitles = [
        [
            'name' => 'tiêu đề',
            'filter' => 'title',
        ],
        [
            'name' => 'danh mục',
            'filter' => 'category',
        ],
        [
            'name' => 'ngày tạo',
            'filter' => 'createdAt',
        ],
        [
            'name' => 'số lượng xem',
            'filter' => 'like',
        ],
        [
            'name' => 'số lượng thích',
            'filter' => 'like',
        ],
    ];
@endphp

<x-table.index class="bg-transparent " :titles="$tableTitles" :checkBox="true" :header="'table-secondary bg-opacity-25'">
    @if (count($data) > 0)
        @foreach ($data as $blog)
            <tr>
                <td scope="row">
                    <div class="form-check text-center ">
                        <input class="form-check-input check-table-item" type="checkbox" value="{{ $blog->id }}">
                    </div>
                </td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->category->name }}</td>
                <td>{{ date($blog->created_at) }}</td>
                <td>{{ 0 }}</td>
                <td>{{ 0 }}</td>
                <td>
                    <div class="d-flex justify-content-end  align-items-center ">
                        <button type="button" class="btn btn-secondary me-1">
                            <i class="bi bi-eye-fill"></i>
                        </button>
                        @if (Route::currentRouteName() == 'manager.blog.trash')
                            <form action="{{ route('manager.blog.restore', ['id' => $blog->id]) }}" method="POST">
                                @csrf
                                @method('POST')
                                <button class="btn btn-secondary me-1">
                                    <i class="bi bi-arrow-clockwise fs-6"></i>
                                </button>
                            </form>
                            <form action="{{ route('manager.blog.destroy', ['id' => $blog->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-secondary me-1">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        @else
                            <a href="{{ route('manager.blog.update', ['id' => $blog->id]) }}" class="btn btn-secondary me-1">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('manager.blog.delete', ['id' => $blog->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-secondary me-1">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="7" style="min-height: 500px;">
                <div class="d-flex justify-content-center align-items-center">
                    <p>không có dữ liệu</p>
                </div>
            </td>
        </tr>
    @endif

</x-table.index>
<x-modal.modal-message :id="'modal-delete-blog'" :title="'xóa bài viết'" :content="'bạn có muốn xóa bài viết nầy không'" />
