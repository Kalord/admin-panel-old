<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $table = '_admin_rule';

    protected $fillable = [
        'title', 'description', 'id_creator'
    ];
}
