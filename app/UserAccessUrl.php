<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserAccessUrl extends Model
{
    protected $table = '_admin_user_access_url';

    public $timestamps = false;

    const ACCESS_URL = '/security/access/';
    const BANNED_URL = '/security/banned/';

    const STATUS_WAIT = 0;
    const STATUS_ACCESS = 1;
    const STATUS_BANNED = 2;

    protected $fillable = [
        'id_user', 'access_url', 'banned_url', 'status'
    ];

    public static function createRecord($id_user, $host)
    {
        $accessUrl = $host . self::ACCESS_URL . Str::random(8);
        $bannedUrl = $host . self::BANNED_URL . Str::random(8);

        return UserAccessUrl::create([
            'id_user'     => $id_user,
            'access_url'  => $accessUrl,
            'banned_url'  => $bannedUrl,
            'status'      => self::STATUS_WAIT
        ]);
    }
}
