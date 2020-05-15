<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function app()
    {
        $query = DB::table('users')->select('id','name','email')->get();
        return view('home.adminlte.login', ['query' => $query]);
    }

    public function homePage()
    {
        return view('home.adminlte.page');
    }

    public function teste()
    {
        
        $users = DB::table('users')->select('id','name','email')->get();

        return view('home', ['users' => $users]);
    }

    public function cadastrar()
    {
        return view('teste.cadastrar');
    }


}
