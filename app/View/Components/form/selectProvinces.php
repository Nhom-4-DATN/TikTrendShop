<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class selectProvinces extends Component
{
    /**
     * Create a new component instance.
     */
    protected $apiProvinces = 'https://vnprovinces.pythonanywhere.com/api/';
    protected string $address;
    public function __construct($data = '')
    {
        $this->address = $data;
    }
    /**
     * Get the view / contents that represent the component.
     */
    function searchAddress()
    {
        $wardsSearch = array();
        if (!empty($this->address)) {
            $arr = explode(',', $this->address);
            $addressDetail =  array_pop($arr);
            $res = Http::get($this->apiProvinces . 'wards/?search=' . ($arr[2] ?? '') . '&limit=100');
            $data = $res->json();
            if (!empty($data['results']) && count($data['results']) > 0) {
                foreach ($data['results'] as $wards) {
                    $address =  $wards['province']['name']  . ' ' . $wards['district']['name'] . ' ' . $wards['name'];
                    if (Str::slug($address) == Str::slug(join(' ', $arr))) {
                        $wardsSearch  = $wards;
                        break;
                    }
                }
            }
            $wardsSearch['addressDetail'] =  $addressDetail;
        }

        return $wardsSearch;
    }
    public function render(): View|Closure|string
    {
        $addressActive = $this->searchAddress();
        $resProvinces = Http::get($this->apiProvinces . 'provinces?limit=100&basic=true');
        $provinces = $resProvinces->json()['results'];
        if (!empty($_GET['id_provinces']) || !empty($addressActive['province']['id'])) {
            $resDistrict = Http::get($this->apiProvinces . 'provinces/' . ($_GET['id_provinces'] ?? $addressActive['province']['id']) . '?limit=100&basic=true');
            $districts = $resDistrict?->json()['districts'];
        }
        if (!empty($_GET['id_district']) || !empty($addressActive['district']['id'])) {
            $resWards = Http::get($this->apiProvinces . 'districts/' . ($_GET['id_district'] ?? $addressActive['district']['id'])  . '?limit=100&basic=true');
            $wards = $resWards?->json()['wards'];
        }

        return view('components.form.select-provinces', ['provinces' => $provinces, 'districts' => $districts ?? [], 'wards' => $wards ?? [], 'addressActive' =>   $addressActive ?? []]);
    }
}
