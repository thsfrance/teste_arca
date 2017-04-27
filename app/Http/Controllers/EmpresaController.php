<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Empresa;
use App\Http\Requests\EmpresaCadastroRequest;
use App\Http\Requests\EmpresaBuscaRequest;

class EmpresaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function cadastro()
    {
        $categorias = Categoria::all();
        return view('empresa.cadastro')->with('categorias',$categorias);
    }
    
    public function salvar(EmpresaCadastroRequest $request){
        try{
           $empresa = Empresa::create($request->except(['_token','categorias']));
           if(!empty($empresa->id)){
               $empresa->categorias()->attach($request->input('categorias'));
               return redirect('home')->with('success','Novo registro incluído com sucesso');
           } else {
               return redirect('home')->with('error','Houve um problema.');
           }
        }catch(Exception $e){
           return redirect('home')->with('error',$e->getMessage());
        }
    }
    
    public function detalhes($codigo){
        $empresa = Empresa::find(base64_decode($codigo));
        return view('empresa.detalhes')->with('empresa',$empresa)->with('categorias',$empresa->categorias);
    }
    
    public function buscar(EmpresaBuscaRequest $request){
        $search = $request->input('search');
        $empresas = Empresa::where('endereco','like','%'.$search.'%')
                                ->orWhere('cidade','like','%'.$search.'%')
                                ->orWhere('estado','like','%'.$search.'%')
                                ->orWhere('titulo','like','%'.$search.'%')->get();
        
        return redirect('home')->with('empresas',$empresas);
    }
}
