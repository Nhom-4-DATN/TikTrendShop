@props(['id', 'title', 'size' => ''])
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog {{ !empty($size) ? 'modal-' . $size : '' }}">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                {{ $footer }}
            </div>
        </div>
    </div>
</div>
@push('scripts')
    @vite(['resources/js/modal.js'])
@endpush
