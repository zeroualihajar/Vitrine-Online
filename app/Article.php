<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
       'codeArt' , 'nomArt', 'pu', 'quantite', 'description', 'joursLivraison',
       'prixLivraison', 'garantie', 'delai', 'image',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }
}
