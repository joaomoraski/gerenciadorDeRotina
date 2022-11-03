@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Adicionar Treino</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('treino.store') }}">
                            @csrf
                            <!-- Nome input -->
                            <div class="form-group">
                                <label class="form-label" for="nome">Nome</label>
                                <input type="text" value="{{ old('nome') }}"
                                       class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome">
                            </div>
                            @error('nome')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <label for="ciclos">Qual ciclo pertence?</label>
                            <select name="ciclos" id="ciclos" class="custom-select">
                                <option value="ciclo1">Ciclo 1</option>
                                <option value="ciclo2">Ciclo 2</option>
                                <option value="ciclo3">Ciclo 3</option>
                            </select>
                            @error('ciclos')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label class="form-label" for="grupoMuscular">Grupo Muscular</label>
                                <input type="text" value="{{ old('grupoMuscular') }}"
                                       class="form-control @error('grupoMuscular') is-invalid @enderror"
                                       name="grupoMuscular" id="grupoMuscular">
                            </div>
                            @error('grupoMuscular')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label class="form-label" for="nota">Nota</label>
                                <input type="text" value="{{ old('nota') }}"
                                       class="form-control @error('nota') is-invalid @enderror" id="nota" name="nota">
                            </div>
                            @error('nota')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
