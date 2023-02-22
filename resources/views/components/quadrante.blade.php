<div class="card-header">
    <h3 class="card-title float-start" style="padding-top: 8px;">Quadrante {{ $numeroQuadrante }}</h3>
    <a href="{{ route('atividade.create', ['numeroQuadrante' => $numeroQuadrante]) }}" class="float-end">
        <button type="button" class="btn btn-success">Nova tarefa</button>
    </a>
</div>
<!-- /.card-header -->
<div class="card-body">
    {{--                                TODO: colocar blockquotes no dashbaord inicial com frases motivacioinais diarias --}}
    {{--                                <blockquote class="small">--}}
    {{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>--}}
    {{--                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>--}}
    {{--                                </blockquote>--}}
    {{--                               TODO: PROGRESS BAR AQ -> VE NO ADMIN LTE COMO FUNCIONA TA EM UI ELEMENTS GENERAL --}}
    <h4>Tarefas {{ $tituloQuadrante }}</h4>
    {{--                                titulo do quadrante--}}
    {{--    for each com $listaTarefas --}}
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th style="width: 10px">Ordem</th>
            <th class="col-6">Nome</th>
            <th>Está concluida?</th>
            <th>Opções</th>
            {{-- TODO: ver a possibilidade de colocar porcentagem da tarefa ja feita --}}
            {{-- <div class="progress progress-xs"><div class="progress-bar progress-bar-danger" style="width: 55%"></div></div></td><td><span class="badge bg-danger">55%</span></td> --}}
        </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
<!-- /.card-body -->
{{--                            <div class="card-footer clearfix">--}}
{{--                                <ul class="pagination pagination-sm m-0 float-right">--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}

