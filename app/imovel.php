<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Imovel extends Model
{
   protected $table = 'imovels';

   protected $fillable = ['tipo_de_imovel', 'negocio', 'bairro', 'cidade', 'valor', 'area', 'descricao', 'user_id'];

   public function fotos()
   {
      return $this->hasMany('foto');
   }

   public function user()
    {
        return $this->belongsTo('User');
    }
}