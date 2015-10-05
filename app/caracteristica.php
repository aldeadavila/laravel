<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class caracteristica extends Model
{
    protected $table = 'caracteristicas';

    protected $fillable = ['nome', 'numero'];

    public function imovels() {
    	return $this->belongsToMany('imovel', 'imovels_caracteristicas', 'caracteristica_id', 'imovel_id');
    }
}
