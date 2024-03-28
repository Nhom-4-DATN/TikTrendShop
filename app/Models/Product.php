<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public function store()
    {
        return $this->belongsTo(Stores::class, 'id_store', 'id');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
