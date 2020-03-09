<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table  = 'products';

    protected $fillable = [

        'id','type_id','product_name','product_content','product_sort','hot','cold','img',
    ];

    public function ProductTypes ()
    {
        return $this->belongsTo('App\ProductTypes','type_id','id');
    }
}
