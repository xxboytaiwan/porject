<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTypes extends Model
{
    protected $table  = 'product_types';

    protected $fillable = [

        'id','type_name','context','sort',
    ];
    public function Products ()
    {
        return $this->hasmany('App\Product','id','type_id');
    }
}
