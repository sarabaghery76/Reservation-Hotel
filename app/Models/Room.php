<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';
    protected $primaryKey = 'room_id';
    public $timestamps =false;

    protected $fillable = [
        'room_type', 'price', 'photo', 'breakfast', 'add_service', 'capacity',
    ];
}
