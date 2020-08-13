<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'guest';
    protected $primaryKey = 'guest_id';
    public $timestamps =false;

    protected $fillable = [
        'firstname', 'lastname', 'contactno',
    ];
}
