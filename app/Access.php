<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $table = '_admin_rule_access';

    protected $fillable = [
        'id_rule', 'id_module'
    ];
}
