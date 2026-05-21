<?php

namespace App\Models;

use App\Models\Cake;
use Illuminate\Database\Eloquent\Model;

class Flavour extends Model
{
    //
    public $timestamps = false;
        protected $fillable = [
        'flavour_name'
    ];
    public function cakes()
{
    return $this->belongsToMany(Cake::class);
}
}
