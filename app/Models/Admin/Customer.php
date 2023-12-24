<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'total_spent',
        'loyaly_points'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
