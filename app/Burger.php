<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Burger extends Model
{
    protected $casts=[
        'ingredients'=>'array'
    ];
}

