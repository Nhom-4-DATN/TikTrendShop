<x-form.index :class="'modal-form'" :action="!empty($data->id) ? route('address.update', ['id' => $data->id]) : route('address.create')" :method="!empty($data->id) ? 'PUT' : 'POST'" :id="'location-form'">
    <div>
        <x-form.input :name="'name'" :lable="'Họ và tên'" :value="$data->name ?? old('name')" />
    </div>
    <div class="mt-4">
        <x-form.input :name="'phone_number'" :lable="'số điện thoại'" :value="$data->phone ?? old('phone')" />
    </div>
    <div class="mt-3">
        <x-form.select-provinces :data="$data->address ?? ''" />
    </div>
    <div class="form-check mt-4">
        <input class="form-check-input" type="checkbox" value="1" id="is_default" {{ !App\Models\Address::count() > 0 || optional($data)->is_default == 1 ? 'checked ' : '' }} name="is_default">
        <label class="form-check-label" for="is_defautl">
            Mặc định
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="delivery_address" name="delivery_address" {{ optional($data)->delivery_address == 1 ? 'checked ' : '' }}>
        <label class="form-check-label" for="delivery_address">
            làm vị giao hàng
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="return_address" name="return_address" {{ optional($data)->return_address == 1 ? 'checked ' : '' }}>
        <label class="form-check-label" for="return_address">
            ví trí trả hàng
        </label>
    </div>
</x-form.index>
