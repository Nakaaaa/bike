<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custom extends Model
{
    protected $table = 'custom';

    protected $fillable = [
        'title',
        'customs',
        'img',
        // 'bike_id',
        'created_at',
        'updated_at'
    ];
}
