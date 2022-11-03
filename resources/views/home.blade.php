@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row row-cols-4 mx-auto">
                                <div class="col">
                                    <a href="{{ route('texto.index') }}">
                                        <button type="button" class="btn btn-outline-primary btn-block">Textos</button>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <button type="button" class="btn btn-outline-primary btn-block">Tarefas</button>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <button type="button" class="btn btn-outline-primary btn-block">Receitas</button>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <button type="button" class="btn btn-outline-primary btn-block">Faculdade</button>
                                    </a>
                                </div>
                                <div class="col pt-4">
                                    <a href="{{ route('gerenciaTreino.index') }}">
                                        <button type="button" class="btn btn-outline-primary btn-block">Treinos</button>
                                    </a>
                                </div>
                                <div class="col pt-4">
                                    <a href="">
                                        <button type="button" class="btn btn-outline-primary btn-block">Suplementos</button>
                                    </a>
                                </div>
                                <div class="col pt-4">
                                    <a href="">
                                        <button type="button" class="btn btn-outline-primary btn-block">Entreterimento</button>
                                    </a>
                                </div>
                                <div class="col pt-4">
                                    <a href="">
                                        <button type="button" class="btn btn-outline-primary btn-block">Remedios</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
