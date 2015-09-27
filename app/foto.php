<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
   protected $table = 'fotos';

   protected $fillable = ['ruta', 'nome', 'descricao', 'imovel_id'];

    public function imovel()
    {
        return $this->belongsTo('App\imovel');
    }
}
