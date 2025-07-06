<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'name',
        'description',
        'image_path',
        'price',
        'subcategory_id',
    ];

    //Relacion uno a muchos inversa
    public function subcategories() {
        return $this->belongsTo(Subcategory::class);
    }

    //Relacion uno a muchos
    public function variants() {
        return $this->hasMany(Variant::class);
    }

    //Relacion muchos a muchos
    public function options() {
        return $this->BelongsToMany(Option::class)
                    ->withPivot('value')
                    ->withTimestamps();
    }
}
