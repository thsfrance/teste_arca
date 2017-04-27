<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['titulo','telefone','endereco','cep','cidade','estado','descricao'];
    public $timestamps = false;
    
    public function categorias(){
        return $this->belongsToMany('App\Categoria','categoria_empresa','empresa_id','categoria_id');
    }
}
