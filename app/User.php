<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

/**
 * Class User
 *
 * @property int $verify_email
 * @property int $status
 *
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable;

    protected $table = '_admin_user';

    public const VERIFY_EMAIL = 1;

    public const STATUS_BANNED = 0;
    public const STATUS_DELETE = 1;
    public const STATUS_ACTIVE = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'login', 'password', 'email', 'verify_email', 'token', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @param string $login
     * @param string $password
     * @return User|null
     */
    public static function findUser($login, $password)
    {
        return self::where('login', $login)->
                     where('password', Hash::make($password))->
                     first();
    }

    /**
     * @param int $id
     * @return bool
     **/
    public static function deleteUser($id)
    {
        if(!$user = self::find($id)) return false;

        $user->status = self::STATUS_DELETE;
        return $user->save();
    }
}
