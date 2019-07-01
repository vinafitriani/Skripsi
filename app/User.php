<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';
    
    public function isAdmin()    {        
        return $this->type === self::ADMIN_TYPE;    
    }

    protected $fillable = [
        'fullname',
        'username',
        'password',
        'email',
        'phone',
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
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pictModel(){
        return $this->hasMany('App\PictModel');
    }
    
    public function userModel()
    {
        return $this->hasOne('App\UserModel');
    }

    public function photo()
    {
        return $this->pictModel()->where('category', 'profile')->latest();
    }
}
