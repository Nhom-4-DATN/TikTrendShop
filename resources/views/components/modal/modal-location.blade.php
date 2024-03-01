<x-modal.index :id="'modal-location'" :title="'thêm vị trí mới'" :size="'lg'">
    <div class="form-location">
        <div class=" d-flex align-items-center  justify-content-center ">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <x-slot:footer>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-primary btn-submit-form" data-for="location-form">Thêm vị trí</button>
    </x-slot:footer>
</x-modal.index>
@push('scripts')
    <script>
        const renderLocation = "{{ route('components.render-list-location') }}";
        const renderFormCULocation = "{{ route('components.render-form-location') }}";
    </script>
@endpush
