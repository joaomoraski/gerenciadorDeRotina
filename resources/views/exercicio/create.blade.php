@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Adicionar Exercicio</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('exercicio.store') }}">
                            @csrf
                            <label for="treinos">Qual treino pertence?</label>
                            <select name="treinos" id="treinos" class="custom-select">
                                <option value="treino1">Treino 1</option>
                                <option value="treino2">Treino 2</option>
                                <option value="treino3">Treino 3</option>
                            </select>
                            @error('treinos')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label class="form-label" for="nome">Nome</label>
                                <input type="text" value="{{ old('nome') }}"
                                       class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome">
                            </div>
                            @error('nome')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <!-- Consideracoes input -->
                            <div class="form-group">
                                <label class="form-label" for="observacoes">Observacoes</label>
                                <textarea name="observacoes" value="{{ old('observacoes') }}"
                                          class="form-control @error('observacoes') is-invalid @enderror"
                                          id="observacoes" rows="4"></textarea>
                            </div>
                            @error('observacoes')
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
