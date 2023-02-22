@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}} ">

    <div class="card Mar25">
        <div class="card-header">
            <h4 class="float-start" style="padding-top: 8px">Matriz de Eisenhower</h4>
        </div>

        @error('erro')
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-ban"></i> Atenção!</h5>
            {{ $message }}
        </div>
        @enderror

        <section class="content" style="margin-top: 15px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <x-quadrante :numeroQuadrante="'1'" :tituloQuadrante="'Urgentes e importantes'">
                                @foreach($listaAtividades['quadrante1'] as $key => $atividade)
                                    <tr class="{{ $atividade->isConcluido ? 'opacity-50 text-decoration-line-through' : 'text-bold' }}">
                                        <td>{{ $atividade->ordem }}</td>
                                        <td>{{ $atividade->nome }}</td>
                                        <td>{{ $atividade->isConcluido ? 'Sim' : 'Não' }}</td>
                                        <td class="btn-group-sm text-center">
                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon"
                                                    data-toggle="dropdown">
                                            </button>
                                            <div class="dropdown-menu text-center">
                                                <form
                                                    action="{{ route('atividade.alterarStatus', ['atividade' => $atividade->id]) }}"
                                                    method="post" id="form_{{ $atividade->id }}_alterarStatus">
                                                    @method("PUT")
                                                    @csrf
                                                    <a href="#" class="bi bi-check text-black"
                                                       onclick="document.getElementById('form_{{ $atividade->id }}_alterarStatus').submit()">
                                                        {{ $atividade->isConcluido ? 'Cancelar' : 'Concluir' }}</a>
                                                </form>

                                                <a href="{{ route('atividade.edit', $atividade->id) }}"
                                                   class="bi bi-pencil text-black"> Alterar</a>

                                                <form
                                                    action="{{ route('atividade.destroy', ['atividade' => $atividade->id]) }}"
                                                    method="post" id="form_{{ $atividade->id }}_excluir">
                                                    @method("DELETE")
                                                    @csrf
                                                    <a href="#" class="bi bi-trash3 text-black"
                                                       onclick="document.getElementById('form_{{ $atividade->id }}_excluir').submit()">
                                                        Excluir</a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </x-quadrante>
                            {{ $listaAtividades['quadrante1']->onEachSide(2)->links() }}
                        </div>
                        <div class="card">
                            <x-quadrante :numeroQuadrante="'2'" :tituloQuadrante="'Importantes, mas não urgentes'">
                                @foreach($listaAtividades['quadrante2'] as $key => $atividade)
                                    <tr class="{{ $atividade->isConcluido ? 'opacity-50 text-decoration-line-through' : 'text-bold' }}">
                                        <td>{{ $atividade->ordem }}</td>
                                        <td>{{ $atividade->nome }}</td>
                                        <td>{{ $atividade->isConcluido ? 'Sim' : 'Não' }}</td>
                                        <td class="btn-group-sm text-center">
                                            <button type="button"
                                                    class="btn btn-default dropdown-toggle dropdown-icon"
                                                    data-toggle="dropdown">
                                            </button>
                                            <div class="dropdown-menu text-center">
                                                <form
                                                    action="{{ route('atividade.alterarStatus', ['atividade' => $atividade->id]) }}"
                                                    method="post" id="form_{{ $atividade->id }}_alterarStatus">
                                                    @method("PUT")
                                                    @csrf
                                                    <a href="#" class="bi bi-check text-black"
                                                       onclick="document.getElementById('form_{{ $atividade->id }}_alterarStatus').submit()">
                                                        {{ $atividade->isConcluido ? 'Cancelar' : 'Concluir' }}</a>
                                                </form>

                                                <a href="{{ route('atividade.edit', $atividade->id) }}"
                                                   class="bi bi-pencil text-black"> Alterar</a>

                                                <form
                                                    action="{{ route('atividade.destroy', ['atividade' => $atividade->id]) }}"
                                                    method="post" id="form_{{ $atividade->id }}_excluir">
                                                    @method("DELETE")
                                                    @csrf
                                                    <a href="#" class="bi bi-trash3 text-black"
                                                       onclick="document.getElementById('form_{{ $atividade->id }}_excluir').submit()">
                                                        Excluir</a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </x-quadrante>
                            {{ $listaAtividades['quadrante2']->onEachSide(2)->links() }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <x-quadrante :numeroQuadrante="'3'" :tituloQuadrante="'Urgentes, mas não importantes'">
                                @foreach($listaAtividades['quadrante3'] as $key => $atividade)
                                    <tr class="{{ $atividade->isConcluido ? 'opacity-50 text-decoration-line-through' : 'text-bold' }}">
                                        <td>{{ $atividade->ordem }}</td>
                                        <td>{{ $atividade->nome }}</td>
                                        <td>{{ $atividade->isConcluido ? 'Sim' : 'Não' }}</td>
                                        <td class="btn-group-sm text-center">
                                            <button type="button"
                                                    class="btn btn-default dropdown-toggle dropdown-icon"
                                                    data-toggle="dropdown">
                                            </button>
                                            <div class="dropdown-menu text-center">
                                                <form
                                                    action="{{ route('atividade.alterarStatus', ['atividade' => $atividade->id]) }}"
                                                    method="post" id="form_{{ $atividade->id }}_alterarStatus">
                                                    @method("PUT")
                                                    @csrf
                                                    <a href="#" class="bi bi-check text-black"
                                                       onclick="document.getElementById('form_{{ $atividade->id }}_alterarStatus').submit()">
                                                        {{ $atividade->isConcluido ? 'Cancelar' : 'Concluir' }}</a>
                                                </form>

                                                <a href="{{ route('atividade.edit', $atividade->id) }}"
                                                   class="bi bi-pencil text-black"> Alterar</a>

                                                <form
                                                    action="{{ route('atividade.destroy', ['atividade' => $atividade->id]) }}"
                                                    method="post" id="form_{{ $atividade->id }}_excluir">
                                                    @method("DELETE")
                                                    @csrf
                                                    <a href="#" class="bi bi-trash3 text-black"
                                                       onclick="document.getElementById('form_{{ $atividade->id }}_excluir').submit()">
                                                        Excluir</a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </x-quadrante>
                            {{ $listaAtividades['quadrante3']->onEachSide(2)->links() }}
                        </div>
                        <div class="card">
                            <x-quadrante :numeroQuadrante="'4'" :tituloQuadrante="'Nem urgente, nem importante'">
                                @foreach($listaAtividades['quadrante4'] as $key => $atividade)
                                    <tr class="{{ $atividade->isConcluido ? 'opacity-50 text-decoration-line-through' : 'text-bold' }}">
                                        <td>{{ $atividade->ordem }}</td>
                                        <td>{{ $atividade->nome }}</td>
                                        <td>{{ $atividade->isConcluido ? 'Sim' : 'Não' }}</td>
                                        <td class="btn-group-sm text-center">
                                            <button type="button"
                                                    class="btn btn-default dropdown-toggle dropdown-icon"
                                                    data-toggle="dropdown">
                                            </button>
                                            <div class="dropdown-menu text-center">
                                                <form
                                                    action="{{ route('atividade.alterarStatus', ['atividade' => $atividade->id]) }}"
                                                    method="post" id="form_{{ $atividade->id }}_alterarStatus">
                                                    @method("PUT")
                                                    @csrf
                                                    <a href="#" class="bi bi-check text-black"
                                                       onclick="document.getElementById('form_{{ $atividade->id }}_alterarStatus').submit()">
                                                        {{ $atividade->isConcluido ? 'Cancelar' : 'Concluir' }}</a>
                                                </form>

                                                <a href="{{ route('atividade.edit', $atividade->id) }}"
                                                   class="bi bi-pencil text-black"> Alterar</a>

                                                <form
                                                    action="{{ route('atividade.destroy', ['atividade' => $atividade->id]) }}"
                                                    method="post" id="form_{{ $atividade->id }}_excluir">
                                                    @method("DELETE")
                                                    @csrf
                                                    <a href="#" class="bi bi-trash3 text-black"
                                                       onclick="document.getElementById('form_{{ $atividade->id }}_excluir').submit()">
                                                        Excluir</a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </x-quadrante>
                            {{ $listaAtividades['quadrante4']->onEachSide(2)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
