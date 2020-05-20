<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{   

    // Função chama a view para mostrar todas as categorias 
    public function index()
    {
        $Categoria = DB::table('Categoria')->select('CodigoCategoria','DescricaoCategoria','AtivoCategoria')->get();
        return view('categoria.index',['cats' => $Categoria]);
    }

    //Função específica para mostrar todas as subcategoria do Hardware
    //Plano B caso a função subcategoria não funcione
    public function hardware()
    {
        $SubCategoria = DB::table('SubCategoria')->select('DescricaoSubCategoria')->where('CodigoCategoria','=','1')->get();
        return view('categoria.subcategoria',['subcats' => $SubCategoria]);
    }

    //Função específica para mostrar todas as subcategoria do Hardware
    //Plano B caso a função subcategoria não funcion
    public function software()
    {
        $SubCategoria = DB::table('SubCategoria')->select('DescricaoSubCategoria')->where('CodigoCategoria','=','2')->get();
        return view('categoria.subcategoria',['subcats' => $SubCategoria]);
    }

    // Função para mostrar todas as subcategoria da categoria escolhida 
    // Função criada para chamar os dados direto do Database
    // Caso seja criada uma nova categoria automaticamente será mostrado na view index das categorias
    // Sem necessidade criar linhas de códigos
    public function subcategoria(String $request)
    {
        $SubCategoria = DB::table('SubCategoria')
        ->join('Categoria','SubCategoria.CodigoCategoria','=','Categoria.CodigoCategoria')
        ->select('SubCategoria.DescricaoSubCategoria')->where('DescricaoCategoria','=',$request)->get();
        return view('categoria.sub',['subcats' => $SubCategoria]);
    }

    // Função para pesquisar determinada categoria 
    public function find(String $request)
    {
        $Categoria = DB::table('Categoria')->where('DescricaoCategoria','=',$request)->get();
        return view('categoria.index',['cats' => $Categoria]);
    }


    public function store(Request $request)
    {
        // Validate the request...
        
        $categoria = new Categoria();

        $categoria->nome = $request;

        $categoria->save();

        echo 'Categoria cadastrada com sucesso, nome da Categoria: ' . $request;
    }

}

