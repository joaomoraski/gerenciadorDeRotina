@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Adicionar Ciclo</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('ciclo.store') }}">
                            @csrf
                            <!-- Nome input -->
                            <div class="form-group">
                                <label class="form-label" for="nome">Nome</label>
                                <input type="text" value="{{ old('nome') }}" id="nome"
                                       class="form-control @error('nome') is-invalid @enderror"/>
                            </div>
                            @error('nome')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <!-- Data Inicio input -->
                            <div class="form-group">
                                <label class="form-label" for="dataInicio">Data Inicio</label>
                                <input type="email" value="{{ old('dataInicio') }}" id="dataInicio"
                                       class="form-control @error('dataInicio') is-invalid @enderror"/>
                            </div>
                            @error('dataInicio')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <!-- Data fim input -->
                            <div class="form-group">
                                <label class="form-label" for="dataFim">Data fim</label>
                                <input type="email" value="{{ old('dataFim') }}" id="dataFim"
                                       class="form-control @error('dataFim') is-invalid @enderror"/>
                            </div>
                            @error('dataFim')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <!-- Consideracoes input -->
                            <div class="form-group">
                                <label class="form-label" for="consideracoes">Consideracoes</label>
                                <textarea value="{{ old('consideracoes') }}"
                                          class="form-control @error('consideracoes') is-invalid @enderror"
                                          id="consideracoes"
                                          rows="4"></textarea>
                            </div>
                            @error('consideracoes')
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
