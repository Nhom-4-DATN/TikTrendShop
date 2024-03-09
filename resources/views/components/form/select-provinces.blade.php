<div class="provinces">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="form-labe">Địa chỉ</div>
        </div>
        <div class="col-4">
            <x-form.select :name="'address[]'" class="show-select-provinces">
                <option value="" selected> Tỉnh/TP </option>
                @foreach ($provinces as $province)
                    @php
                        $provinceSelecte = (!empty($_GET['id_provinces']) && $_GET['id_provinces'] == $province['id'] ? 'selected' : '') || (!empty($addressActive['province']) && $addressActive['province']['id'] == $province['id']) ? 'selected' : '';
                    @endphp
                    <option value="{{ $province['name'] ?? '' }}" data-id="{{ $province['id'] }}" {{ $provinceSelecte }}>{{ $province['name'] }}</option>
                @endforeach
            </x-form.select>
        </div>
        <div class="col-4">
            <x-form.select :name="'address[]'" :disabled="count($districts) > 0 ? false : true" class="show-select-district">
                <option value="" selected>Quận/Huyện</option>
                @foreach ($districts as $district)
                    @php
                        $activeDistrict = (!empty($_GET['id_district']) && $_GET['id_district'] == $district['id']) || (!empty($addressActive['district']) && $addressActive['district']['id'] == $district['id']) ? 'selected' : '';
                    @endphp
                    <option value="{{ $district['name'] ?? '' }}" data-id="{{ $district['id'] }}" {{ $activeDistrict }}>{{ $district['name'] }}</option>
                @endforeach
            </x-form.select>
        </div>
        <div class="col-4">
            <x-form.select :name="'address[]'" :disabled="count($wards) > 0 ? false : true" class="show-select-wards">
                <option value="" selected>Phường/Xã</option>
                @foreach ($wards as $ward)
                    @php
                        $wardSelecte = !empty($addressActive['id']) && $addressActive['id'] == $ward['id'] ? 'selected' : '';
                    @endphp
                    <option value="{{ $ward['name'] ?? '' }}" data-id="{{ $ward['id'] }}" {{ $wardSelecte }}>{{ $ward['name'] }}</option>
                @endforeach
            </x-form.select>
        </div>
        <div class="col-12">
            @error('address')
                <div class="fs-6 text-danger ">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="mt-3">
        <x-form.input :name="'address_detail'" :lable="'địa chỉ chi tiết'" maxlength="255" :value="$addressActive['addressDetail'] ?? ''" />
    </div>
</div>
