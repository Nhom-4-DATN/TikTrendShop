@props(['headerList' => []])


<table class="table">
    <thead>
        @foreach ($headerList as $header)
            <tr>{{ $header }}</tr>
        @endforeach
    </thead>
</table>
