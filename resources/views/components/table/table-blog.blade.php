@php
    $tableTitles = [
        [
            'name' => 'tiêu đề',
            'filter' => 'title',
        ],
        [
            'name' => 'danh mục',
            'filter' => '',
        ],
        [
            'name' => 'ngày tạo',
            'filter' => '',
        ],
        [
            'name' => 'số lượng xem',
            'filter' => '',
        ],
    ];
@endphp
<x-table.index class="bg-transparent " :titles="$tableTitles" :checkBox="true" :header="'table-secondary bg-opacity-25'">
    @foreach ($data as $blog)
        <tr>
            <td scope="row">
                <div class="form-check text-center ">
                    <input class="form-check-input" type="checkbox" value="">
                </div>
            </td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->category->name }}</td>
            <td>{{ date($blog->created_at) }}</td>
            <td>{{ 0 }}</td>
            <td>
                <div class="d-flex justify-content-end  align-items-center ">
                    <button type="button" class="btn btn-secondary me-1">
                        <i class="bi bi-eye-fill"></i>
                    </button>
                    <button type="button" class="btn btn-secondary me-1">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <button type="button" class="btn btn-secondary me-1">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
            </td>
        </tr>
    @endforeach
</x-table.index>
