<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'img', 'race', 'size', 'color', 'age', 'castrated'
    ];
}
