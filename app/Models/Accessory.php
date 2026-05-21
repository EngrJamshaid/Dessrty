<?php

namespace App\Models;

use App\Models\AccessoryCategory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    //
    public $timestamps = false;
    protected $guarded = [];
        public function category(){
        return $this->belongsTo(AccessoryCategory::class,'category_id');
    }
}
