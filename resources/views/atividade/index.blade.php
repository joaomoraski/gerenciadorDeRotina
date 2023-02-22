@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}} ">

    <div class="card Mar25">
        <div class="card-header">
            <h4 class="float-start" style="padding-top: 8px">Atividades</h4>
            <a href="{{ route('remedio.create') }}" class="float-end">
                <button type="button" class="btn btn-success">Novo</button>
            </a>
        </div>

        @error('erro')
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i> Atenção!</h5>
                {{ $message }}
            </div>
        @enderror

        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-break">
                <thead>
                <tr class="text-center">
                    <th>Nome</th>
                    <th>Funcionalidade</th>
                    <th>Quantidade tomar</th>
                    <th>Estoque</th>
                    <th>Receitado</th>
                    <th>Quantas vezes ao dia</th>
                    <th>Intervalo</th>
                    <th>Tempo em dias</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                @foreach($remedios as $key => $remedio)
                    <tr class="text-center">
                        <td style="font-weight: bold !important;" class="col-1">{{ $remedio['nome'] }}</td>
                        <td class="col-4">{{ $remedio['funcionalidade'] }}</td>
                        {{--                        <td>{{ date('d/m/y', strtotime($texto['created_at'])) }}</td>--}}
                        {{--                        <td>{{ date('d/m/y', strtotime($texto['updated_at'])) }}</td>--}}
                        <td>{{ $remedio['quantidadeTomar'] }}</td>
                        <td>{{ $remedio['estoque'] }}</td>
                        <td>{{ $remedio['isReceitado'] ? 'Sim' : 'Não' }}</td>
                        <td>{{ $remedio['quantasVezes'] }}</td>
                        <td>{{ $remedio['intervalo'] }}</td>
                        <td>{{ $remedio['tempoEmDias'] }}</td>
                        <td class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon"
                                    data-toggle="dropdown">
                            </button>
                            <div class="dropdown-menu text-center">
                                <a href="{{ route('remedio.edit', $remedio['id']) }}"
                                   class="bi bi-pencil text-black"> Alterar</a>
                                <form action="{{ route('remedio.destroy', ['remedio' => $remedio->id]) }}"
                                      method="post" id="form_{{ $remedio['id'] }}">
                                    @method("DELETE")
                                    @csrf
                                    <a href="#" class="bi bi-trash3 text-black"
                                       onclick="document.getElementById('form_{{ $remedio['id'] }}').submit()">
                                        Excluir</a>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $remedios->onEachSide(2)->links() }}
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
