<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{   
   protected $fillable = [
       'username',
       'height',
       'gender'
   ];
}
