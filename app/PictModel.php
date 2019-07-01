<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PictModel extends Model
{
    protected $table = 'pict';

    protected $fillable = [
        'portfolio',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
