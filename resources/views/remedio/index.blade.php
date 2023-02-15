@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}} ">

    <div class="card Mar25">
        <div class="card-header">
            <h4 class="float-start" style="padding-top: 8px">Textos</h4>
            <a href="{{ route('texto.create') }}" class="float-end">
                <button type="button" class="btn btn-success">Novo</button>
            </a>
        </div>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-break">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Conteúdo</th>
                    <th>Criado em</th>
                    <th>Atualizado em</th>
                    <th>Editar</th>
                    <th>Remover</th>
                </tr>
                </thead>
                <tbody>
                @foreach($remedios as $key => $remedio)
                    <tr>
                        <th scope="row">{{ $texto['id'] }}</th>
                        <td>{{ $texto['content'] }}</td>
                        <td>{{ date('d/m/y', strtotime($texto['created_at'])) }}</td>
                        <td>{{ date('d/m/y', strtotime($texto['updated_at'])) }}</td>
                        <td><a href="{{ route('texto.edit', $texto['id']) }}"
                               class="bi bi-pencil text-decoration-none"></a></td>
                        <td>
                            <form action="{{ route('texto.destroy', ['texto' => $texto->id]) }}"
                                  method="post" id="form_{{ $texto['id'] }}">
                                @method("DELETE")
                                @csrf
                                <a href="#" class="bi bi-trash3 text-decoration-none"
                                   onclick="document.getElementById('form_{{ $texto['id'] }}').submit()"></a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $textos->onEachSide(2)->links() }}
        </div>
    </div>

    <script src="{{ asset('vendor/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendor/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endsection
