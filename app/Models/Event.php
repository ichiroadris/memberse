<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'date',
        'price'
    ];

    protected $with = [
        'participants'
    ];

    public function participants()
    {
        return $this->belongsToMany('App\Models\User', 'event_participants');
    }
}
