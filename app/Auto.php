<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = 'auto';
    public $fillable = ['model_name', 'cubic_capacity', 'max_speed', 'pic'];
}
