@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Criar Novo Jogo</h1>
    <hr>
    <form action="{{ route('jogos.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="nome" class="form-label">Nome do Jogo:</label>
            <input type="text" class="form-control" id="nome" name="nome" required maxlength="55">
        </div>
        
        <div class="form-group mb-3">
            <label for="categoria" class="form-label">Categoria:</label>
            <input type="text" class="form-control" id="categoria" name="categoria" required maxlength="55">
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('jogos.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection