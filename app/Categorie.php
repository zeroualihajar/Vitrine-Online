<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'nomCat',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function articles()
    {
        return $this->hasMany('App\Article');
    }

}

