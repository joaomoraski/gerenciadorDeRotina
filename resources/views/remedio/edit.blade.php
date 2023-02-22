@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Remedio</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('remedio.update', ['remedio' => $remedio])}}">
                            @csrf
                            @method("PUT")
                            <div class="mb-3">
                                <label class="form-label">Nome do remedio</label>
                                <input type="text" class="form-control @error('content') is-invalid @enderror"
                                       name="nome"
                                       value="{{ old('nome') ?? $remedio->nome }}" required>
                                @error('nome')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
{{--                               Deixar o {{ valor }} na mesma linha do fim da tag para nao dar um espaco desnecessario na tela--}}
                                <label class="form-label" for="funcionalidade">Funcionalidade</label>
                                <textarea class="form-control @error('funcionalidade') is-invalid @enderror"
                                          rows="4" id="funcionalidade" name="funcionalidade" required>{{ $remedio->funcionalidade ?? old('funcionalidade') }}</textarea>
                                @error('funcionalidade')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Quantos tomar</label>
                                <input type="text" class="form-control @error('quantidadeTomar') is-invalid @enderror"
                                       name="quantidadeTomar"
                                       value="{{ old('quantidadeTomar') ?? $remedio->quantidadeTomar  }}" required>
                                @error('quantidadeTomar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Estoque</label>
                                <input type="text" class="form-control @error('estoque') is-invalid @enderror"
                                       name="estoque"
                                       value="{{ old('estoque') ?? $remedio->estoque  }}" required>
                                @error('estoque')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <label for="isReceitado">É receitado?</label>
                            <select name="isReceitado" id="isReceitado" class="custom-select">
                                <option value="">Selecione</option>
                                <option value="1" {{ $remedio->isReceitado ? 'selected' : '' }}>Sim</option>
                                <option value="0" {{ $remedio->isReceitado == false ? 'selected' : '' }}>Não</option>
                            </select>
                            @error('isReceitado')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Quantas vezes tomar?</label>
                                <input type="text" class="form-control @error('quantasVezes') is-invalid @enderror"
                                       name="quantasVezes"
                                       value="{{ old('quantasVezes') ?? $remedio->quantasVezes }}" required>
                                @error('quantasVezes')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Intervalo</label>
                                <input type="text" class="form-control @error('intervalo') is-invalid @enderror"
                                       name="intervalo"
                                       value="{{ old('intervalo') ?? $remedio->intervalo }}" required>
                                @error('intervalo')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tempo em dias</label>
                                <input type="text" class="form-control @error('tempoEmDias') is-invalid @enderror"
                                       name="tempoEmDias"
                                       value="{{ old('tempoEmDias') ?? $remedio->tempoEmDias }}" required>
                                @error('tempoEmDias')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
