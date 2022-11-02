@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-start" style="padding-top: 8px">Treino</h4>
                        <ul class="navbar-nav ms-auto float-end">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle MarR15" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Configurar</a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#criarCiclo">Criar
                                        Exercicio</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#criarCiclo">Criar
                                        Treino</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#criarCiclo">Criar
                                        Semana</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#criarCiclo">Criar
                                        Cíclo</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    {{--                    <button type="button" class="btn btn-success float-start" style="width: 15vh" data-toggle="modal"--}}
                    {{--                            data-target="#criarSemana">Nova Semana--}}
                    {{--                    </button>--}}

                    {{--                    <form>--}}
                    {{--                        --}}{{-- action --}}
                    {{--                        <label for="ciclos"></label><select name="ciclos" id="ciclos">--}}
                    {{--                            <option value="valor1">Valor 1</option>--}}
                    {{--                            <option value="valor2" selected>Valor 2</option>--}}
                    {{--                            <option value="valor3">Valor 3</option>--}}
                    {{--                        </select>--}}
                    {{--                        <br>--}}
                    {{--                        <button type="submit" value="Filtrar"></button>--}}
                    {{--                    </form>--}}


                    <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-semana-1-tab" data-toggle="pill"
                                       href="#custom-tabs-one-semana-1" role="tab" aria-controls="custom-tabs-one-home"
                                       aria-selected="true">Semana 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-semana-2-tab" data-toggle="pill"
                                       href="#custom-tabs-one-semana-2" role="tab"
                                       aria-controls="custom-tabs-one-profile" aria-selected="false">Semana 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-semana-3-tab" data-toggle="pill"
                                       href="#custom-tabs-one-semana-3" role="tab"
                                       aria-controls="custom-tabs-one-messages" aria-selected="false">Semana 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-semana-4-tab" data-toggle="pill"
                                       href="#custom-tabs-one-semana-4" role="tab"
                                       aria-controls="custom-tabs-one-settings" aria-selected="false">Semana 4</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-one-semana-1" role="tabpanel"
                                     aria-labelledby="custom-tabs-one-home-tab">
                                    <h4>Força de resistência</h4>
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
                                        <td>Id</td>
                                        <td>Conteúdo</td>
                                        <td>Criado em</td>
                                        <td>Atualizado em</td>
                                        <td>Editar</td>
                                        <td>Remover</td>
                                        {{--                                    @foreach($textos as $key => $texto)--}}
                                        {{--                                        <tr>--}}
                                        {{--                                            <th scope="row">{{ $texto['id'] }}</th>--}}
                                        {{--                                            <td>{{ $texto['content'] }}</td>--}}
                                        {{--                                            <td>{{ date('d/m/y', strtotime($texto['created_at'])) }}</td>--}}
                                        {{--                                            <td>{{ date('d/m/y', strtotime($texto['updated_at'])) }}</td>--}}
                                        {{--                                            <td><a href="{{ route('texto.edit', $texto['id']) }}" class="bi bi-pencil text-decoration-none"></a></td>--}}
                                        {{--                                            <td>--}}
                                        {{--                                                <form action="{{ route('texto.destroy', ['texto' => $texto->id]) }}" method="post" id="form_{{ $texto['id'] }}">--}}
                                        {{--                                                    @method("DELETE")--}}
                                        {{--                                                    @csrf--}}
                                        {{--                                                    <a href="#" class="bi bi-trash3 text-decoration-none" onclick="document.getElementById('form_{{ $texto['id'] }}').submit()"></a>--}}
                                        {{--                                                </form>--}}
                                        {{--                                            </td>--}}
                                        {{--                                        </tr>--}}
                                        {{--                                    @endforeach--}}
                                        </tbody>
                                    </table>
                                    {{--                                {{ $textos->onEachSide(2)->links() }}--}}
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-semana-2" role="tabpanel"
                                     aria-labelledby="custom-tabs-one-profile-tab">
                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra
                                    purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et
                                    ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl
                                    ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus,
                                    elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-semana-3" role="tabpanel"
                                     aria-labelledby="custom-tabs-one-messages-tab">
                                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus
                                    volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum.
                                    Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec
                                    augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc.
                                    Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus
                                    efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum.
                                    Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum
                                    metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare
                                    magna.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-semana-4" role="tabpanel"
                                     aria-labelledby="custom-tabs-one-settings-tab">
                                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis
                                    tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque
                                    tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum
                                    consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra.
                                    Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut
                                    nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet
                                    accumsan ex sit amet facilisis.
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Treino -->
    <div class="modal fade" id="criarTreino" tabindex="-1" role="dialog" aria-labelledby="criarTreinoLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="criarTreinoLabel">Novo Treino</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <label for="ciclos">Qual ciclo pertence?</label>
                        <select name="ciclos" id="ciclos">
                            <option value="ciclo1">Ciclo 1</option>
                            <option value="ciclo2">Ciclo 2</option>
                            <option value="ciclo3">Ciclo 3</option>
                        </select>
                        <input type="text" name="nome" placeholder="Nome">
                        <label for="tipo">Tipo de treino</label>
                        <select name="tipo" id="tipo">
                            <option value="tipo1">tipo 1</option>
                            <option value="tipo2">tipo 2</option>
                            <option value="tipo3">tipo 3</option>
                            <option value="tipo4">tipo 4</option>
                        </select>
                        <input type="text" name="dataInicio" placeholder="Data de inicio">
                        <input type="text" name="dataFim" placeholder="Data do fim">
                        <textarea placeholder="Consideracoes" name="consideracoes"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <form action="">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Exercicio -->
    <div class="modal fade" id="criarSemana" tabindex="-1" role="dialog" aria-labelledby="criarSemanaLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="criarSemanaLabel">Nova semana</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <label for="ciclos">Qual ciclo pertence?</label>
                        <select name="ciclos" id="ciclos">
                            <option value="ciclo1">Ciclo 1</option>
                            <option value="ciclo2">Ciclo 2</option>
                            <option value="ciclo3">Ciclo 3</option>
                        </select>
                        <input type="text" name="nome" placeholder="Nome">
                        <label for="tipo">Tipo de treino</label>
                        <select name="tipo" id="tipo">
                            <option value="tipo1">tipo 1</option>
                            <option value="tipo2">tipo 2</option>
                            <option value="tipo3">tipo 3</option>
                            <option value="tipo4">tipo 4</option>
                        </select>
                        <input type="text" name="dataInicio" placeholder="Data de inicio">
                        <input type="text" name="dataFim" placeholder="Data do fim">
                        <textarea placeholder="Consideracoes" name="consideracoes"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <form action="">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal semanas -->
    <div class="modal fade" id="criarSemana" tabindex="-1" role="dialog" aria-labelledby="criarSemanaLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="criarSemanaLabel">Nova semana</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <label for="ciclos">Qual ciclo pertence?</label>
                        <select name="ciclos" id="ciclos">
                            <option value="ciclo1">Ciclo 1</option>
                            <option value="ciclo2">Ciclo 2</option>
                            <option value="ciclo3">Ciclo 3</option>
                        </select>
                        <input type="text" name="nome" placeholder="Nome">
                        <label for="tipo">Tipo de treino</label>
                        <select name="tipo" id="tipo">
                            <option value="tipo1">tipo 1</option>
                            <option value="tipo2">tipo 2</option>
                            <option value="tipo3">tipo 3</option>
                            <option value="tipo4">tipo 4</option>
                        </select>
                        <input type="text" name="dataInicio" placeholder="Data de inicio">
                        <input type="text" name="dataFim" placeholder="Data do fim">
                        <textarea placeholder="Consideracoes" name="consideracoes"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <form action="">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal ciclos -->
    <div class="modal fade" id="criarCiclo" tabindex="-1" role="dialog" aria-labelledby="criarCicloLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="criarCicloLabel">Novo cíclo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <input type="text" name="nome" placeholder="Nome">
                        <input type="text" name="dataInicio" placeholder="Data de inicio">
                        <input type="text" name="dataFim" placeholder="Data do fim">
                        <textarea placeholder="Consideracoes" name="consideracoes"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <form action="">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
