<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $table  = 'newstest';

    protected $fillable = [

        'id','img','context','sort',
    ];
    public function NewsImgs ()
    {
        return $this->hasMany('App\NewsImgs','NewsID','id');
    }
}
