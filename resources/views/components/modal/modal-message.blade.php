@props(['id', 'title', 'content'])

<x-modal.index class="modal-massage" :id="$id" :title="$title">
    <div class="message-content">
        <p>{{ $content }}</p>
    </div>
    <x-slot:footer>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        <button data-url="" class="btn btn-primary btn-url">Đồng ý</button>
    </x-slot:footer>
</x-modal.index>
@push('scripts')
    <script>
        const idModalMessage = "#{{ $id }}";
        const csrfToken = " {{ csrf_token() }}";
    </script>
@endpush
