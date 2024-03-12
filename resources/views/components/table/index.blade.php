@props(['titles' => [], 'checkBox' => false, 'header' => ''])


<table {{ $attributes->class(['table']) }}>
    <thead class="{{ $header }}">
        <tr>
            @if ($checkBox)
                <td>
                    <input type="checkbox">
                </td>
            @endif
            @foreach ($titles as $header)
                <th scope="col">
                    @if (!empty($header['filter']))
                        <a class="text-black text-decoration-none " href="{{ route(Route::currentRouteName(), ['order' => $header['filter']]) }}">
                            {{ $header['name'] }}
                            <i class="bi bi-sort-alpha-up-alt"></i>
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
