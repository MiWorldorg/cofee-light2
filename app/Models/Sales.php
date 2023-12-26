<?php

namespace App\Models;

use App\Models\Admin\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;



    public function order()
    {
        return $this->belongsTo(Order::class);

    }
}
