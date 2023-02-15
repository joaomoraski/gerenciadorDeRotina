@extends('layouts.app')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Home</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
{{--        <section class="content">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-info">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>150</h3>--}}

{{--                                <p>New Orders</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-bag"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-success">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>53<sup style="font-size: 20px">%</sup></h3>--}}

{{--                                <p>Bounce Rate</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-stats-bars"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-warning">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>44</h3>--}}

{{--                                <p>User Registrations</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-person-add"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-danger">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>65</h3>--}}

{{--                                <p>Unique Visitors</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-pie-graph"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                </div>--}}
{{--                <!-- /.row -->--}}
{{--                <!-- Main row -->--}}
{{--                <div class="row">--}}
{{--                    <!-- Left col -->--}}
{{--                    <section class="col-lg-7 connectedSortable">--}}
{{--                        <!-- TO DO List -->--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title">--}}
{{--                                    <i class="ion ion-clipboard mr-1"></i>--}}
{{--                                    To Do List--}}
{{--                                </h3>--}}

{{--                                <div class="card-tools">--}}
{{--                                    <ul class="pagination pagination-sm">--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">1</a></li>--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">2</a></li>--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">3</a></li>--}}
{{--                                        <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-header -->--}}

{{--                            <div class="card-body">--}}
{{--                                <ul class="todo-list" data-widget="todo-list">--}}
{{--                                    <li>--}}
{{--                                        <!-- drag handle -->--}}
{{--                                        <span class="handle">--}}
{{--                                          <i class="fas fa-ellipsis-v"></i>--}}
{{--                                          <i class="fas fa-ellipsis-v"></i>--}}
{{--                                        </span>--}}
{{--                                        <!-- checkbox -->--}}
{{--                                        <div class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo1" id="todoCheck1">--}}
{{--                                            <label for="todoCheck1"></label>--}}
{{--                                        </div>--}}
{{--                                        <!-- todo text -->--}}
{{--                                        <span class="text">Design a nice theme</span>--}}
{{--                                        <!-- Emphasis label -->--}}
{{--                                        <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>--}}
{{--                                        <!-- General tools such as edit or delete-->--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                <span class="handle">--}}
{{--                                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                                      <i class="fas fa-ellipsis-v"></i>--}}
{{--                                </span>--}}
{{--                                        <div class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>--}}
{{--                                            <label for="todoCheck2"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Make the theme responsive</span>--}}
{{--                                        <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                <span class="handle">--}}
{{--                                    <i class="fas fa-ellipsis-v"></i>--}}
{{--                                    <i class="fas fa-ellipsis-v"></i>--}}
{{--                                </span>--}}
{{--                                        <div class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo3" id="todoCheck3">--}}
{{--                                            <label for="todoCheck3"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Let theme shine like a star</span>--}}
{{--                                        <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                <span class="handle">--}}
{{--                                  <i class="fas fa-ellipsis-v"></i>--}}
{{--                                  <i class="fas fa-ellipsis-v"></i>--}}
{{--                                </span>--}}
{{--                                        <div class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo4" id="todoCheck4">--}}
{{--                                            <label for="todoCheck4"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Let theme shine like a star</span>--}}
{{--                                        <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                <span class="handle">--}}
{{--                                  <i class="fas fa-ellipsis-v"></i>--}}
{{--                                  <i class="fas fa-ellipsis-v"></i>--}}
{{--                                </span>--}}
{{--                                        <div class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo5" id="todoCheck5">--}}
{{--                                            <label for="todoCheck5"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Check your messages and notifications</span>--}}
{{--                                        <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                <span class="handle">--}}
{{--                                  <i class="fas fa-ellipsis-v"></i>--}}
{{--                                  <i class="fas fa-ellipsis-v"></i>--}}
{{--                                </span>--}}
{{--                                        <div class="icheck-primary d-inline ml-2">--}}
{{--                                            <input type="checkbox" value="" name="todo6" id="todoCheck6">--}}
{{--                                            <label for="todoCheck6"></label>--}}
{{--                                        </div>--}}
{{--                                        <span class="text">Let theme shine like a star</span>--}}
{{--                                        <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>--}}
{{--                                        <div class="tools">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            <i class="fas fa-trash-o"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}
{{--                    </section>--}}
{{--                    <!-- /.Left col -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- /.content -->
    <!-- /.content-wrapper -->

{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-8">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">{{ __('Dashboard') }}</div>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="container text-center">--}}
{{--                                <div class="row row-cols-4 mx-auto">--}}
{{--                                    <div class="col">--}}
{{--                                        <a href="{{ route('texto.index') }}">--}}
{{--                                            <button type="button" class="btn btn-outline-primary btn-block">Textos</button>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <a href="">--}}
{{--                                            <button type="button" class="btn btn-outline-primary btn-block">Tarefas</button>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <a href="">--}}
{{--                                            <button type="button" class="btn btn-outline-primary btn-block">Receitas</button>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <a href="">--}}
{{--                                            <button type="button" class="btn btn-outline-primary btn-block">Faculdade</button>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col pt-4">--}}
{{--                                        <a href="{{ route('gerenciaTreino.index') }}">--}}
{{--                                            <button type="button" class="btn btn-outline-primary btn-block">Treinos</button>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col pt-4">--}}
{{--                                        <a href="">--}}
{{--                                            <button type="button" class="btn btn-outline-primary btn-block">Suplementos</button>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col pt-4">--}}
{{--                                        <a href="">--}}
{{--                                            <button type="button" class="btn btn-outline-primary btn-block">Entreterimento</button>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col pt-4">--}}
{{--                                        <a href="">--}}
{{--                                            <button type="button" class="btn btn-outline-primary btn-block">Remedios</button>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
@endsection
