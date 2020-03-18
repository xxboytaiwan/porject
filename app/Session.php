<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'session';
    protected $fillable = [
        'id','type_id','product_name','quantity',
    ];
}
