<?php

namespace App\Repository\Store;

use App\Models\Stores;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StoreRepository
{
    function create($req)
    {
        if ($req->hasFile('thumb-image')) {
            $file = $req->file('thumb-image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $thumb_url = $file->storeAs('uploads', $fileName, 'public');
        }
        $stores = Stores::create([
            'name' => $req->name_shop,
            'phone' => $req->phone_number,
            'description' => $req->description,
            'slug' => $req->slug,
            'thumb_url' => $thumb_url ?? '12',
            'id_user' => Auth::id(),
            'email' => $req->email
        ]);
        return $stores;
    }
    function update(Stores $store, $req)
    {
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
            'address' =>  $req->address ?? $store->address,
            'thumb_url' => $thumb_url ?? $store->thumb_url,
            'email' => $req->email
        ]);
        return $store;
    }
    function detail()
    {
        return  User::find(Auth::id())->oneStore;
    }
}
