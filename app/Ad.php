<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $table = 'ads';

    protected $fillable = [
        'user_id', 'city_id', 'type_id' , 'category_id', 'title', 'text', 'price', 'phone', 'confirm', 'slug'
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'confirm' => 'boolean',
        'status' => 'boolean',
    ];

    public function scopeAdsList($query)
    {
        return $query->where('confirm', '=', 1)->orderBy('id', 'desc');
    }
}
