<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table='book';
    protected $fillable = ['title', 'id_user', 'pages', 'price']; //medida de seguraça(permite que só esses campos sejam cadastrados)

    public function relUsers(){
        return $this->hasOne('App\User', 'id', 'id_user');
    }
}
