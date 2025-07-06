<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'description',
        'option_id'
    ];

    //Relacion uno a muchos inversa
    public function options() {
        return $this->belongsTo(Option::class);
    }

    //Relacion muchos a muchos
    public function variants() {
        return $this->BelongsToMany(Product::class)
                    ->withTimestamps();
    }
}
