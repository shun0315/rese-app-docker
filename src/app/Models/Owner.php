<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Owner extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'shop_id',
    ];

    protected $hidden = [
        'password',
    ];

    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function shop()
    {
        return $this->belongsTo('App\Models\Shop');
    }
}
