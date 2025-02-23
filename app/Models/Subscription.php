<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mvdnbrk\EloquentExpirable\Expirable;

class Subscription extends Model
{
    use HasFactory;
    use Expirable;

    public function user() {
        return $this->hasMany('App\Models\User');
    }
}
