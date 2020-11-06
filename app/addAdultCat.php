<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addAdultCat extends Model
{
    //
    protected $fillable = [
        'image', 'catName', 'age','sex'
    ];
}
