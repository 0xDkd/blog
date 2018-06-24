<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function gravatar($size = '150')
    {
        $email_md5 = md5(trim($this->attributes['email']));
        $link = 'https://gravatar.loli.net/avatar/'. $email_md5 .'?s='. $size .'&#038;d=mm&#038;r=g';
        return $link;
    }
}
