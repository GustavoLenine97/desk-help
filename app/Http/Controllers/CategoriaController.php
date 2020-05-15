<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function index()
    {
        $Categoria = DB::table('Categoria')->select('DescricaoCategoria')->get();
        return view('categoria.index',['cats' => $Categoria]);
    }

    public function hardware()
    {
        $SubCategoria = DB::table('SubCategoria')->select('DescricaoSubCategoria')->where('CodigoCategoria','=','1')->get();
        return view('categoria.hardware',['subcats' => $SubCategoria]);
    }

    public function store(Request $request)
    {
        // Validate the request...
        
        $categoria = new Categoria();

        $categoria->nome = $request;

        $categoria->save();

        echo 'Categoria cadastrada com sucesso, nome da Categoria: ' . $request;
    }

    public function escolha(Request $request)
    {
        $escolha = $request;

        echo $escolha;
    }

}

