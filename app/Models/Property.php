<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    // seller relation
    public function seller() {
        return $this->belongsTo(Seller::class);
    }

    // review relation
    public function review() {
        return $this->hasMany(Review::class);
    }

    // order relation
    public function order() {
        return $this->hasMany(Order::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
