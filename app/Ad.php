<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    public $terms = false;

    protected $table = 'ads';

    protected $fillable = [
        'user_id', 'city_id', 'type_id' , 'category_id', 'title', 'text', 'price', 'phone', 'confirm', 'slug'
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'confirm' => 'boolean',
        'status' => 'boolean',
        'terms' => 'boolean',
    ];

    public static $ads_type = [
        1 => 'Купить',
        2 => 'Продать',
        3 => 'Услуги',
        4 => 'Другое...'
    ];

    /**
     * Этот accessor для получения укороченного текста,
     * определённого количества символов не разбивая слова.
     *
     * @param int $length
     * @return mixed|string
     */
    public function getShortTextAttribute($length = 400)
    {
        $str = $this->text;
        $postfix = '...';

        if (strlen($str) <= $length) {
            return $str;
        }

        $temp = substr($str, 0, $length);
        return substr($temp, 0, strrpos($temp, ' ')) . $postfix;
    }

    public function scopeAdsList($query)
    {
        return $query->where('confirm', '=', 1)->orderBy('id', 'desc')->paginate(15);
    }
}
