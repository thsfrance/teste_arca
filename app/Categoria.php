<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empresa;

class Categoria extends Model
{
    protected $fillable = ['descricao'];
    public $timestamps = false;
    
    public function empresas(){
        return $this->hasMany('App\Empresa');
    }
}
