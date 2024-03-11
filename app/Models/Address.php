<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'id_user', 'name', 'address', 'phone', 'is_default', 'return_address', 'delivery_address', 'created_at',
        'updated_at'
    ];
    use HasFactory;
}
