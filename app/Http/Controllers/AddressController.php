<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use App\View\Components\form\FormLocation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class AddressController extends Controller
{
    protected $addressModal;
    function __construct()
    {
        $this->addressModal = new Address();
    }
    function index()
    {
        return view('pages.manage-stores.location');
    }
    function create(Request $req)
    {
        try {
            if ($this->addressModal->count() > 0) {
                if (!empty($req->is_default)) {
                    $this->addressModal->where('is_default', 1)->update([
                        'is_default' => 0
                    ]);
                }
                if (!empty($req->delivery_address)) {
                    $this->addressModal->where('delivery_address', 1)->update([
                        'delivery_address' => 0
                    ]);
                }
                if (!empty($req->return_address)) {
                    $this->addressModal->where('return_address', 1)->update([
                        'return_address' => 0
                    ]);
                }
            }
            $address = join(',', $req->address) . ', ' . $req->address_detail;
            $addressDetail = $this->addressModal->create(
                [
                    'phone' => $req->phone_number,
                    'address' => $address,
                    'name' => $req->name,
                    'id_user' => Auth::id(),
                    'delivery_address' => $req->delivery_address,
                    'return_address' => $req->return_address,
                    'is_default' => $req->is_default ?? ($this->addressModal->count() < 1 ? 1 : 0),
                ]
            );
            return response()->json(['message' => 'tạo thành công', 'code' => 200, 'data' => $addressDetail]);
        } catch (Exception $e) {
            return response()->json(['message' => 'that bai', 'code' => $e->getCode()]);
        }
    }
    function update(Request $req, $id)
    {
        try {
            if ($this->addressModal->count() > 0) {
                if (!empty($req->is_default)) {
                    $this->addressModal->where('is_default', 1)->update([
                        'is_default' => 0
                    ]);
                }
                if (!empty($req->delivery_address)) {
                    $this->addressModal->where('delivery_address', 1)->update([
                        'delivery_address' => 0
                    ]);
                }
                if (!empty($req->return_address)) {
                    $this->addressModal->where('return_address', 1)->update([
                        'return_address' => 0
                    ]);
                }
            }
            $address = join(',', $req->address) . ', ' . $req->address_detail;
            $addressDetail = $this->addressModal->find($id);
            $addressDetail = $addressDetail->update(
                [
                    'phone' => $req->phone_number,
                    'address' => $address,
                    'name' => $req->name,
                    'delivery_address' => $req->delivery_address,
                    'return_address' => $req->return_address,
                    'is_default' => $req->is_default ?? ($this->addressModal->count() < 1 ? 1 : 0),
                ]
            );
            return response()->json(['message' => 'update thành công', 'code' => 200, 'data' =>  $addressDetail]);
        } catch (Exception $e) {
            return response()->json(['message' => 'that bai', 'code' => $e->getCode()]);
        }
    }
    function delete($id)
    {
        try {
            $address = $this->addressModal->find($id);
            $address->delete();
            return response()->json(['message' => 'xóa thành công', 'code' => 200, 'data' => $address]);
        } catch (Exception $e) {
            return response()->json(['message' => 'that bai', 'code' => $e->getCode()]);
        }
    }
    function formCU($id = null)
    {
        $address = $this->addressModal->find($id);
        $html =  (new FormLocation($address ?? []))->render();
        return $html;
    }
}
