<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pay',
        'id_user',
        'id_store',
        'payment_method',
        'date',
        'note',
        'code',
        'status',
        'email',
        'phone',
        'full_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function store()
    {
        return $this->belongsTo(Stores::class, 'id_store');
    }
}
