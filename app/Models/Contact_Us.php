<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact_Us extends Model
{
    protected $table = 'contact_us';
    protected $primaryKey = 'contact_id';
    public $timestamps =false;

    protected $fillable = [
        'name', 'email', 'message',
    ];
}
