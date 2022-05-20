<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Buyer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // user relation
    public function user() {
        return $this->belongsTo(User::class);
    }
}
