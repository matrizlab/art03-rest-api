<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'nome',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
