<?php

namespace App\Models;

use App\Models\Cake;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['name', 'image'];

    public function cakes()
    {
        return $this->hasMany(Cake::class);
    }
}
