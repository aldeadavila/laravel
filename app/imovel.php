<?php
namespace Imobiliaria\Models;
use Illuminate\Database\Eloquent\Model;
class imovel extends Model
{
   protected $table = 'imovels';

   protected $fillable = ['tipo_de_imovel', 'negocio', 'bairro', 'cidade', 'valor', 'area', 'descricao', 'user_id'];

   public function fotos()
   {
      return $this->hasMany('App\foto');
   }

   public function user()
    {
        return $this->belongsTo('App\user');
    }
}