<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    protected $table  = 'newstest';

    protected $fillable = [

        'id','img','context',
    ];
}
