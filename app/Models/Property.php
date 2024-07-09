<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public static function search($query)
    // {
    //     return self::where('description', 'like', '%' . $query . '%')
    //                 ->orWhere('title', 'like', '%' . $query . '%');
    // }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class)->withTimestamps();
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'property_id');
    }
}
