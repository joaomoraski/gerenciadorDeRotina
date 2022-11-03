@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Configurar Módulo Treino</div>

                    <div class="card-body">
                        <div class="card card-primary card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-ciclos-tab" data-toggle="pill"
                                           href="#custom-tabs-one-ciclos" role="tab" aria-selected="true">Cíclos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-semanas-tab" data-toggle="pill"
                                           href="#custom-tabs-one-semanas" role="tab" aria-selected="false">Semanas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-treinos-tab" data-toggle="pill"
                                           href="#custom-tabs-one-treinos" role="tab" aria-selected="false">Treinos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-exercicios-tab" data-toggle="pill"
                                           href="#custom-tabs-one-exercicios" role="tab"
                                           aria-controls="custom-tabs-one-settings" aria-selected="false">Exercicios</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-one-ciclos" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-home-tab">
                                        <a href="{{ route('ciclo.create') }}" class="float-end Mar10">
                                            <button type="button" class="btn btn-success">Novo cíclo</button>
                                        </a>
                                        <table class="table text-center">
                                            <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Data inicio</th>
                                                <th scope="col">Data fim</th>
                                                <th scope="col">Consideracoes</th>
                                                <th scope="col">Editar</th>
                                                <th scope="col">Remover</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($ciclos as $key => $ciclo)
                                                <tr>
                                                    <th scope="row">{{ $ciclo['id'] }}</th>
                                                    <td>{{ $ciclo['label'] }}</td>
                                                    <td>{{ date('d/m/y', strtotime($ciclo['dataInicio'])) }}</td>
                                                    <td>{{ date('d/m/y', strtotime($ciclo['dataFim'])) }}</td>
                                                    <td>{{ $ciclo['consideracoes'] }}</td>
                                                    <td><a href="{{ route('ciclo.edit', $ciclo['id']) }}"
                                                           class="bi bi-pencil text-decoration-none"></a></td>
                                                    <td>
                                                        <form
                                                            action="{{ route('ciclo.destroy', ['ciclo' => $ciclo->id]) }}"
                                                            method="post" id="form_{{ $ciclo['id'] }}">
                                                            @method("DELETE")
                                                            @csrf
                                                            <a href="#" class="bi bi-trash3 text-decoration-none"
                                                               onclick="document.getElementById('form_{{ $ciclo['id'] }}').submit()"></a>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $ciclos->onEachSide(2)->links() }}
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-semanas" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-profile-tab">
                                        <a href="{{ route('semana.create') }}" class="float-end Mar10">
                                            <button type="button" class="btn btn-success">Nova semana</button>
                                        </a>
                                        <table class="table text-center">
                                            <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Ciclo</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Tipo</th>
                                                <th scope="col">Data inicio</th>
                                                <th scope="col">Data fim</th>
                                                <th scope="col">Editar</th>
                                                <th scope="col">Remover</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($semanas as $key => $semana)
                                                <tr>
                                                    <th scope="row">{{ $semana['id'] }}</th>
                                                    <td>{{ $semana['ciclo'] }}</td>
                                                    <td>{{ $semana['nome'] }}</td>
                                                    <td>{{ $semana['tipo'] }}</td>
                                                    <td>{{ date('d/m/y', strtotime($semana['dataInicio'])) }}</td>
                                                    <td>{{ date('d/m/y', strtotime($semana['dataFim'])) }}</td>
                                                    <td><a href="{{ route('texto.edit', $semana['id']) }}"
                                                           class="bi bi-pencil text-decoration-none"></a></td>
                                                    <td>
                                                        <form
                                                            action="{{ route('semana.destroy', ['semana' => $semana->id]) }}"
                                                            method="post" id="form_{{ $semana['id'] }}">
                                                            @method("DELETE")
                                                            @csrf
                                                            <a href="#" class="bi bi-trash3 text-decoration-none"
                                                               onclick="document.getElementById('form_{{ $semana['id'] }}').submit()"></a>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $semanas->onEachSide(2)->links() }}
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-treinos" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-messages-tab">
                                        <a href="{{ route('treino.create') }}" class="float-end Mar10">
                                            <button type="button" class="btn btn-success">Novo treino</button>
                                        </a>
                                        <table class="table text-center">
                                            <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Ciclo</th>
                                                <th scope="col">Grupo muscular</th>
                                                <th scope="col">Nota</th>
                                                <th scope="col">Editar</th>
                                                <th scope="col">Remover</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($treinos as $key => $treino)
                                                <tr>
                                                    <th scope="row">{{ $treino['id'] }}</th>
                                                    <td>{{ $treino['nome'] }}</td>
                                                    <td>{{ $treino['ciclo'] }}</td>
                                                    <td>{{ $treino['grupoMuscular'] }}</td>
                                                    <td>{{ $treino['nota'] }}</td>
                                                    <td><a href="{{ route('treino.edit', $treino['id']) }}"
                                                           class="bi bi-pencil text-decoration-none"></a></td>
                                                    <td>
                                                        <form
                                                            action="{{ route('treino.destroy', ['treino' => $treino->id]) }}"
                                                            method="post" id="form_{{ $treino['id'] }}">
                                                            @method("DELETE")
                                                            @csrf
                                                            <a href="#" class="bi bi-trash3 text-decoration-none"
                                                               onclick="document.getElementById('form_{{ $treino['id'] }}').submit()"></a>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $treinos->onEachSide(2)->links() }}
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-exercicios" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-settings-tab">
                                        <a href="{{ route('exercicio.create') }}" class="float-end Mar10">
                                            <button type="button" class="btn btn-success">Novo exercicio</button>
                                        </a>
                                        <table class="table text-center">
                                            <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Treino</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Observacoes</th>
                                                <th scope="col">Editar</th>
                                                <th scope="col">Remover</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($exercicios as $key => $exercicio)
                                                <tr>
                                                    <th scope="row">{{ $exercicio['id'] }}</th>
                                                    <td>{{ $exercicio['treino'] }}</td>
                                                    <td>{{ $exercicio['nome'] }}</td>
                                                    <td>{{ $exercicio['observacoes'] }}</td>
                                                    <td><a href="{{ route('exercicio.edit', $exercicio['id']) }}"
                                                           class="bi bi-pencil text-decoration-none"></a></td>
                                                    <td>
                                                        <form
                                                            action="{{ route('exercicio.destroy', ['exercicio' => $exercicio->id]) }}"
                                                            method="post" id="form_{{ $exercicio['id'] }}">
                                                            @method("DELETE")
                                                            @csrf
                                                            <a href="#" class="bi bi-trash3 text-decoration-none"
                                                               onclick="document.getElementById('form_{{ $exercicio['id'] }}').submit()"></a>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $exercicios->onEachSide(2)->links() }}
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @include('gerenciaTreino.modals')

@endsection
