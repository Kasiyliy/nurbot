<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shape extends Model
{
    protected $fillable = ['name' , 'shape_id','current'];
}
