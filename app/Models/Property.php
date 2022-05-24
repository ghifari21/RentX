<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')->orWhere('description', 'like', '%' . $search . '%')->orWhere('address', 'like', '%' . $search . '%')->orWhere('province', 'like', '%' . $search . '%')->orWhere('city', 'like', '%' . $search . '%')->orWhere('district', 'like', '%' . $search . '%');
            });
        });
    }

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
