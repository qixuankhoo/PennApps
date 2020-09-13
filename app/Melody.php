<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Melody extends Model
{
    protected $fillable = ['name', 'encoding'];

    public $table = 'melodies';

    public function user() {
        return $this->belongsTo(User::class);
    }
}
