<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateFormStoreCU;
use App\Models\Stores;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repository\Store\StoreRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class StoresController extends Controller
{
    protected $storesModel;
    protected $storeRepository;
    function __construct(StoreRepository $storeRepository)
    {
        $this->storesModel = new Stores();
        $this->storeRepository = $storeRepository;
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
        if (empty(User::find(Auth::id())->oneStore)) return redirect(route('register.shop'));
        return view('pages.manage-stores.register.register-address');
    }

    function register(ValidateFormStoreCU $req)
    {
        try {
            $this->storeRepository->create($req);
            return redirect(route('shop.register-address'));
        } catch (Exception $e) {
            toastr()->success($e->getMessage(), 'Lỗi');
            return back();
        }
    }
    function detail(Request $req, $slug)
    {
        $store = $this->storeRepository->detail();
        return view('pages.manage-stores.detail', ['store' => $store]);
    }
    function update(ValidateFormStoreCU $req, $slug)
    {
        try {
            $store = $this->storesModel->where('slug', $slug)->first();
            $this->storeRepository->update($store, $req);
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
            $store = User::find(Auth::id())->oneStore;
            $address = join(',', $req->address) . ',' . $req->address_detail;
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
