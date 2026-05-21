<?php

namespace App\Models;

use App\Models\Accessory;
use Illuminate\Database\Eloquent\Model;

class AccessoryCategory extends Model
{
    //
    public $timestamps = false;
    protected $guarded = [];

    public function accessories(){
        return $this->hasMany(Accessory::class,'category_id');
    }
}
