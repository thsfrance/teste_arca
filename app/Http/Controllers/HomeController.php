<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class HomeController extends Controller
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
    public function index()
    {
        
        $empresas = Empresa::limit(5)->get();
        
        return view('home')->with('empresas',$empresas);
    }
}
