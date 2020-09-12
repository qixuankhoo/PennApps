<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Melody extends Model
{
    protected $fillable = ['name', 'encoding'];

    public $table = 'melodies';

}
