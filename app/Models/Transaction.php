<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 'transaction_id';
    public $timestamps =false;

    protected $fillable = [
        'guest_id', 'room_id', 'room_no', 'extra_bed', 'status', 'days', 'checkin', 'bill',
    ];

    public function guest()
    {
        return $this->belongsTo('App\Models\Guest', 'guest_id');
    }

    public function room()
    {
        return $this->belongsTo('App\Models\Room', 'room_id');
    }

}
