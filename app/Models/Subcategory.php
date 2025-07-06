<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id'
    ];

    //Relacion uno a muchos inversa
    public function category() {
        return $this->BelongsTo(Subcategory::class);
    }

    //Relacion uno a muchos 
    public function product() {
        return $this->hasMany(Product::class);
    }
}
