<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateFormStoreCU;
use App\Models\Stores;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class StoresController extends Controller
{
    protected $storesModel;
    function __construct()
    {
        $this->storesModel = new Stores();
    }


    function index()
    {
        $store = $this->storesModel->where('id_user', '=', Auth::id())->first();
        return view('pages.manage-stores.index', ['store' => $store]);
    }


    function registerShop()
    {
        if (!empty(User::find(Auth::id())->oneStore)) return redirect(route('manager.shop'));
        return view('pages.manage-stores.register.register-shop', ['store' => $store ?? []]);
    }
    function registerAddress()
    {
        return view('pages.manage-stores.register.register-address');
    }

    function register(ValidateFormStoreCU $req)
    {
        try {
            if ($req->hasFile('thumb-image')) {
                $file = $req->file('thumb-image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $thumb_url = $file->storeAs('uploads', $fileName, 'public');
            }
            $this->storesModel->create([
                'name' => $req->name_shop,
                'phone' => $req->phone_number,
                'description' => $req->description,
                'slug' => $req->slug,
                'thumb_url' => $thumb_url ?? '12',
                'id_user' => Auth::id(),
                'email' => $req->email
            ]);
            return redirect(route('shop.register-address'));
        } catch (Exception $e) {
            toastr()->success($e->getMessage(), 'Lỗi');
            return back();
        }
    }



    function detail(Request $req, $slug)
    {
        $store = $this->storesModel->where('slug', '=', $req->slug)->first();
        return view('pages.manage-stores.detail', ['store' => $store]);
    }
    function update(ValidateFormStoreCU $req, $slug)
    {
        try {
            $store = $this->storesModel->where('slug', $slug)->first();
            if ($req->hasFile('thumb_image')) {
                if (Storage::exists('public/' . $store->thumb_url)) {
                    Storage::delete('public/' . $store->thumb_url);
                }
                $file = $req->file('thumb_image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $thumb_url =  $file->storeAs('uploads', $fileName, 'public');
            }
            $store->update([
                'name' => $req->name_shop,
                'phone' => $req->phone_number,
                'description' => $req->description,
                'address' =>  join(', ', $req->address) . ',' . $req->address_detail ?? $store->address,
                'thumb_url' => $thumb_url ?? $store->thumb_url,
                'email' => $req->email
            ]);
            toastr()->success('cập nhập thành công', 'Cập nhập thông tin shop');
            return back();
        } catch (Exception $e) {
            toastr()->error('cập nhập thất bại', 'Cập nhập thông tin shop');
            return back();
        }
    }
    function UpdateAddressOffline($id, Request $req)
    {
        try {

            $address = join(',', $req->address) . ',' . $req->address_detail;
            $store = User::find(Auth::id())->oneStore;
            $store->update([
                'address' => $address,
            ]);
            toastr()->success('Bạn đã trời thành người bán hàng của TikTrendShop', 'chào mừng');
            return redirect(route('manager.shop'));
        } catch (Exception $e) {
            toastr()->error($e->getMessage(), 'Lỗi');
            return back();
        }
    }
    function addressOffline()
    {
        try {
            if (User::find(Auth::id())->hasManyAddresses->count() <= 0) {
                throw new Exception('bạn phải có vị trí gia và trả hàng');
            }
            $store = User::find(Auth::id())->oneStore;
            return view('pages.manage-stores.register.register-address-shop', ['store' => $store]);
        } catch (Exception $e) {
            toastr()->error($e->getMessage(), 'Lỗi');
            return back();
        }
    }
}
