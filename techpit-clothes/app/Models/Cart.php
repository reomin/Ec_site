<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsToMany(
            product::class,
            "line_items",
        )->withPivot(["id", "quantity"]);
    }
}
