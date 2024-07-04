<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model implements AuthenticatableContract
{

    use Authenticatable;

    use HasFactory;
    protected $guard = 'customer';

    protected $fillable =
    [
        'name', 'email', 'password',
    ];

    protected $hidden =
    [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
