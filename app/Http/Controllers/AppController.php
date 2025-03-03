<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $jogos = Jogo::all();
        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create()
    {
        return view('jogos.create');
    }

    public function store(Request $request)
    {
        jogo::create($request->all());
        return redirect()->route('jogos.index');
    }
}
