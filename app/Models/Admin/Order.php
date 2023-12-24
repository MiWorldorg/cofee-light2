<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable=[
        'status',
        'user_id',
        'total_price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
