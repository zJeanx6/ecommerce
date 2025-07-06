<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type'
    ];

    //Relacion muchos a muchos
    public function options() {
        return $this->BelongsToMany(Product::class)
                    ->withPivot('value')
                    ->withTimestamps();
    }

    //Relacion uno a muchos
    public function features() {
        return $this->hasMany(Feature::class);
    }
}
