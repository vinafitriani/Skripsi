<?php

namespace App;

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
        'fullname',
        'username',
        'password',
        'email',
        'location',
        'profile_pict',
        'category',
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

    public function pictModel(){
        return $this->hasMany('App\PictModel');
    }
    
    public function userModel()
    {
        return $this->hasOne('App\UserModel', 'username', 'username');
    }

    public function photo()
    {
        return $this->pictModel()->where('category', 'profile')->latest();
    }
}
