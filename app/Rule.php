<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $table = '_admin_rule';

    protected $fillable = [
        'title', 'description', 'id_creator'
    ];

    /**
     * Получение названия роли по идентификатору
     * 
     * @param int $id_rule
     * @return string
     */
    public static function getTitleByIdRule($id_rule)
    {
        return self::find($id_rule)->title;
    }
}
