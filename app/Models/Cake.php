<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    //
    public $timestamps = false;

        protected $fillable = [
        'cake_name',
        'cake_price',
        'pound',
        'image',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function flavours()
{
    return $this->belongsToMany(Flavour::class);
}

public function fillings()
{
    return $this->belongsToMany(Filling::class);
}
}
