@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Texto</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('texto.update', ['texto' => $texto]) }}">
                            @csrf
                            @method("PUT")
                            <div class="mb-3">
                                <label class="form-label">Texto</label>
                                <input type="text" class="form-control @error('content') is-invalid @enderror" name="content"
                                       value="{{ $texto->content }}" required autofocus>
                                @error('content')
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
