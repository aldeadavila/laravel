<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
   protected $table = 'fotos';

   protected $fillable = ['ruta', 'nome', 'descricao', 'imovel_id'];

    public function imovel()
    {
        return $this->belongsTo('imovel');
    }
}
