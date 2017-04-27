<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empresa;

class Categoria extends Model
{
    protected $fillable = ['descricao'];
    public $timestamps = false;
    
    public function empresas(){
        return $this->belongsToMany('App\Categoria','categoria_empresa','empresa_id','categoria_id');
    }
}
