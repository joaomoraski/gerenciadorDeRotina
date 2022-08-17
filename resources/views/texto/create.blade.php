@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Adicionar Texto</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('texto.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Texto</label>
                                <input type="text" class="form-control @error('content') is-invalid @enderror" name="content"
                                       value="{{ old('content') }}" required autofocus>
                                @error('content')
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
