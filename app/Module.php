<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = '_admin_module';

    protected $fillable = [
        'title', 'description'
    ];

    public $timestamps = false;
}
