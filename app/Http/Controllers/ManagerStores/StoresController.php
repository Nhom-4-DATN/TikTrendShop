<?php

namespace App\Http\Controllers\ManagerStores;

use App\Http\Requests\ValidateFormStoreCU;
use App\Models\Stores;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
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
    function formCU()
    {
        return view('pages.manage-stores.register', ['store' => $store ?? []]);
    }
    function register(ValidateFormStoreCU $req)
    {
        try {
            if ($req->hasFile('thumb-image')) {
                $file = $req->file('thumb-image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $thumb_url = $file->storeAs('uploads', $fileName, 'public');
            }
            $store =  $this->storesModel->create([
                'name' => $req->name_shop,
                'phone' => $req->phone_number,
                'description' => $req->description,
                'address' => join(",", $req->address),
                'slug' => $req->slug,
                'thumb_url' => $thumb_url,
                'id_user' => Auth::id(),
            ]);
            return response()->json($store);
        } catch (Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
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
                'address' => $req->address ?? $store->address,
                'thumb_url' => $thumb_url ?? $store->thumb_url
            ]);
            return response()->json($store);
        } catch (Exception $e) {
            echo $e->getMessage();
            die;
        }
    }
}
