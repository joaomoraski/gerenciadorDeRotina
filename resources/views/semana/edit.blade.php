@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Semana</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('semana.update', ['semana' => $semana]) }}">
                            @csrf
                            @method("PUT")
                            <label for="ciclos">Qual ciclo pertence?</label>
                            <select name="ciclos" id="ciclos" class="custom-select">
                                <option value="ciclo1">Ciclo 1</option>
                                <option value="ciclo2">Ciclo 2</option>
                                <option value="ciclo3">Ciclo 3</option>
                            </select>
                            @error('ciclos')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <!-- Nome input -->
                            <div class="form-group">
                                <label class="form-label" for="nome">Nome</label>
                                <input type="text" value="{{ $semana->nome }}"
                                       class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome">
                            </div>
                            @error('nome')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <label for="tipo">Tipo de treino</label>
                            <select name="tipo" id="tipo" class="custom-select">
                                <option value="tipo1">tipo 1</option>
                                <option value="tipo2">tipo 2</option>
                                <option value="tipo3">tipo 3</option>
                                <option value="tipo4">tipo 4</option>
                            </select>
                            @error('tipo')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <!-- Data Inicio input -->
                            <div class="form-group">
                                <label class="form-label" for="dataInicio">Data Inicio</label>
                                <input type="email" value="{{ $semana->dataInicio }}" id="dataInicio"
                                       class="form-control @error('dataInicio') is-invalid @enderror"/>
                            </div>
                            @error('dataInicio')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <!-- Data fim input -->
                            <div class="form-group">
                                <label class="form-label" for="dataFim">Data fim</label>
                                <input type="email" value="{{ $semana->dataFim }}" id="dataFim"
                                       class="form-control @error('dataFim') is-invalid @enderror"/>
                            </div>
                            @error('dataFim')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
