@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Adicionar Remedio</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('remedio.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nome do remedio</label>
                                <input type="text" class="form-control @error('content') is-invalid @enderror"
                                       name="nome"
                                       value="{{ old('nome') }}" required>
                                @error('nome')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Funcionalidade</label>
                                <textarea class="form-control @error('funcionalidade') is-invalid @enderror"
                                          name="funcionalidade" required>{{ old('funcionalidade') }}</textarea>
                                @error('funcionalidade')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quantos tomar</label>
                                <input type="text" class="form-control @error('quantidadeTomar') is-invalid @enderror"
                                       name="quantidadeTomar"
                                       value="{{ old('quantidadeTomar') }}" required>
                                @error('quantidadeTomar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Estoque</label>
                                <input type="text" class="form-control @error('estoque') is-invalid @enderror"
                                       name="estoque"
                                       value="{{ old('estoque') }}" required>
                                @error('estoque')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <label for="isReceitado">É receitado?</label>
                            <select name="isReceitado" id="isReceitado" class="custom-select">
                                <option value="">Selecione</option>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                            @error('isReceitado')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Quantas vezes tomar?</label>
                                <input type="text" class="form-control @error('quantasVezes') is-invalid @enderror"
                                       name="quantasVezes"
                                       value="{{ old('quantasVezes') }}" required>
                                @error('quantasVezes')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Intervalo</label>
                                <input type="text" class="form-control @error('intervalo') is-invalid @enderror"
                                       name="intervalo"
                                       value="{{ old('intervalo') }}" required>
                                @error('intervalo')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tempo em dias</label>
                                <input type="text" class="form-control @error('tempoEmDias') is-invalid @enderror"
                                       name="tempoEmDias"
                                       value="{{ old('tempoEmDias') }}" required>
                                @error('tempoEmDias')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
