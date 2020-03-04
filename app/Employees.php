<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table  = 'empolyees';

    protected $fillable = [

        'id','name','Position','Office','Age','StartDate','Salary',
    ];
}
