<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $table = 'rule';
    protected $primaryKey = 'rule_id';
    public $timestamps =false;

    protected $fillable = [
        'title', 'description',
    ];
}
