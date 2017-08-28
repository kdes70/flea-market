<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = [
        'name', 'slug'
    ];

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

}
