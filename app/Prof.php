<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    protected $fillable = [
        'name','email','phone'
    ];

}
