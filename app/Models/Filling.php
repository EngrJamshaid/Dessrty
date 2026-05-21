<?php

namespace App\Models;

use App\Models\Cake;
use Illuminate\Database\Eloquent\Model;

class Filling extends Model
{
    //
    public $timestamps = false;
        protected $fillable = [
        'filling_name'
    ];
    public function cakes()
{
    return $this->belongsToMany(Cake::class);
}
}
