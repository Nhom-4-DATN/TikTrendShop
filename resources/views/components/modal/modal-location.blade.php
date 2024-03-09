<x-modal.index :id="'modal-location'" :title="'Vị trí'" :size="'lg'">
    <div class="form-location">
        <div class=" d-flex align-items-center  justify-content-center ">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <x-slot:footer>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-primary btn-submit-form" data-for="location-form">Lưu</button>
    </x-slot:footer>
</x-modal.index>
@push('scripts')
    <script>
        const provinces_url = "{{ route('components.render-provinces') }}";
        const renderLocation = "{{ route('components.render-list-location') }}";
        const renderFormCULocation = "{{ route('components.render-form-location') }}";
    </script>
    @vite(['resources/js/form.js'])
@endpush
