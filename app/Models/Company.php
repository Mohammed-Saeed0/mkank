<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model implements AuthenticatableContract
{

    use Authenticatable;

    use HasFactory;
    protected $guard = 'company';

    protected $fillable = [
        'name', 'email', 'phone', 'password', 'logo', 'postal_number', 'tax_card', 'company_description', 'company_location'
    ];

    protected $hidden =
    [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
