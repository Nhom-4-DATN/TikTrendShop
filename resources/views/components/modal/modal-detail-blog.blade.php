@props(['id' => ''])
<x-modal.index class="modal-detail-blog" :id="$id" :title="'bài đăng'" :size="'xl'">
    <div class="content">

    </div>
    <x-slot:footer>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">đông modal</button>
    </x-slot:footer>
</x-modal.index>
