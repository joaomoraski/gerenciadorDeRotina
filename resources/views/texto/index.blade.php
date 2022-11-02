@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-start" style="padding-top: 8px">Textos</h4>
                        <a href="{{ route('texto.create') }}" class="float-end"><button type="button" class="btn btn-success">Novo</button></a>
                    </div>

                    <div class="card-body">
                        <table class="table text-center">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Conteúdo</th>
                                <th scope="col">Criado em</th>
                                <th scope="col">Atualizado em</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Remover</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($textos as $key => $texto)
                                <tr>
                                    <th scope="row">{{ $texto['id'] }}</th>
                                    <td>{{ $texto['content'] }}</td>
                                    <td>{{ date('d/m/y', strtotime($texto['created_at'])) }}</td>
                                    <td>{{ date('d/m/y', strtotime($texto['updated_at'])) }}</td>
                                    <td><a href="{{ route('texto.edit', $texto['id']) }}" class="bi bi-pencil text-decoration-none"></a></td>
                                    <td>
                                        <form action="{{ route('texto.destroy', ['texto' => $texto->id]) }}" method="post" id="form_{{ $texto['id'] }}">
                                            @method("DELETE")
                                            @csrf
                                            <a href="#" class="bi bi-trash3 text-decoration-none" onclick="document.getElementById('form_{{ $texto['id'] }}').submit()"></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $textos->onEachSide(2)->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
