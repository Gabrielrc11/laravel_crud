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
        Jogo::create($request->all());
        return redirect()->route('jogos.index');
    }

    public function edit(Jogo $jogo)
    {
        return view('jogos.edit', ['jogo' => $jogo]);
    }

    public function update(Request $request, Jogo $jogo)
    {
        $jogo->update($request->all());
        return redirect()->route('jogos.index');
    }

    public function destroy(Jogo $jogo)
    {
        $jogo->delete();
        return redirect()->route('jogos.index');
    }
}
