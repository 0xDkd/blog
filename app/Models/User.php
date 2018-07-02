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
        'name', 'email', 'password','nickname','introduction','cover','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        $this->hasMany(Post::class);
    }

    public function options()
    {
        $this->hasMany(UserOption::class);
    }

    public function avatar($size = '150')
    {

        if ($this->attributes['avatar']){
            return $this->attributes['avatar'];
        }
        $email_md5 = md5(trim($this->attributes['email']));
        $link = 'https://gravatar.loli.net/avatar/'. $email_md5 .'?s='. $size .'&#038;d=mm&#038;r=g';
        return $link;
    }

    public function cover()
    {
        if (!$this->attributes['cover']){
            $cover_link = 'https://ooo.0o0.ooo/2017/02/19/58a9706412c15.png';
            return $cover_link;
        }
        return $this->attributes['cover'];


    }
}
