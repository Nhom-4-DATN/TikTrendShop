@props(['titles' => [], 'checkBox' => false, 'header' => ''])


<table {{ $attributes->class(['table']) }}>
    <thead class="{{ $header }}">
        <tr>
            @if ($checkBox)
                <td>
                    <input type="checkbox" class="check-table-all">
                </td>
            @endif
            @foreach ($titles as $header)
                <th scope="col">
                    @if (!empty($header['filter']))
                        <a class="filter-table text-black text-decoration-none "
                            href="{{ route('manager.blog.filter', ['order' => $header['filter'], 'by' => !empty($_GET['by']) && !empty($_GET['order']) && $header['filter'] == $_GET['order'] && $_GET['by'] == 'ASC' ? 'DESC' : 'ASC']) }}">
                            {{ $header['name'] }}
                            <i class="{{ !empty($_GET['by']) && !empty($_GET['order']) && $header['filter'] == $_GET['order'] && $_GET['by'] == 'ASC' ? 'bi bi-sort-alpha-down-alt' : 'bi bi-sort-alpha-up-alt' }}"></i>
                        </a>
                    @else
                        {{ $header['name'] }}
                    @endif
                </th>
            @endforeach
            <td>
            </td>
        </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>
