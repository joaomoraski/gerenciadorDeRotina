@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Ciclo</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('ciclo.update', ['ciclo' => $ciclo]) }}">
                            @csrf
                            @method("PUT")
                            <!-- Nome input -->
                            <div class="form-group">
                                <label class="form-label" for="nome">Nome</label>
                                <input type="text" value="{{ $ciclo->label }}" id="nome"
                                       class="form-control @error('nome') is-invalid @enderror"/>
                            </div>
                            @error('nome')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <!-- Data Inicio input -->
                            <div class="form-group">
                                <label class="form-label" for="dataInicio">Data Inicio</label>
                                <input type="email" value="{{ $ciclo->iniciouEm }}" id="dataInicio"
                                       class="form-control @error('iniciouEm') is-invalid @enderror"/>
                            </div>
                            @error('iniciouEm')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <!-- Data fim input -->
                            <div class="form-group">
                                <label class="form-label" for="dataFim">Data fim</label>
                                <input type="email" value="{{ $ciclo->acabouEm }}" id="dataFim"
                                       class="form-control @error('acabouEm') is-invalid @enderror"/>
                            </div>
                            @error('acabouEm')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <!-- Consideracoes input -->
                            <div class="form-group">
                                <label class="form-label" for="consideracoes">Consideracoes</label>
                                <textarea class="form-control @error('consideracoes') is-invalid @enderror" id="consideracoes"
                                          rows="4">{{ $ciclo->consideracoes }}</textarea>
                            </div>
                            @error('consideracoes')
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
