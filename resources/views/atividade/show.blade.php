@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Visualizar Texto - {{ $texto->content }}</div>

                    <div class="card-body">
                        <fieldset disabled>
                            <div class="mb-3">
                                <label class="form-label">Conteúdo</label>
                                <input type="text" class="form-control" value="{{ $texto->content }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Criado em</label>
                                <input type="text" class="form-control" value="{{ date('d/m/y', strtotime($texto['created_at'])) }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alterado em</label>
                                <input type="text" class="form-control" value="{{ date('d/m/y', strtotime($texto['updated_at'])) }}" disabled>
                            </div>
                        </fieldset>
                        <a href="{{ route('texto.index') }}" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
