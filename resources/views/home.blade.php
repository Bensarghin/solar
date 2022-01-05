@extends('backoffice.layout.master')

@section('content')
@section('content-title','Dashboard')
<div class="state-overview">
    <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-b-green">
                <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Students</span>
                    <span class="info-box-number">450</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 45%"></div>
                    </div>
                    <span class="progress-description">
                        45% Increase in 28 Days
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-b-yellow">
                <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                <div class="info-box-content">
                    <span class="info-box-text">New Students</span>
                    <span class="info-box-number">155</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 40%"></div>
                    </div>
                    <span class="progress-description">
                        40% Increase in 28 Days
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-b-blue">
                <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Course</span>
                    <span class="info-box-number">52</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 85%"></div>
                    </div>
                    <span class="progress-description">
                        85% Increase in 28 Days
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-b-pink">
                <span class="info-box-icon push-bottom"><i
                        class="material-icons">monetization_on</i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Fees Collection</span>
                    <span class="info-box-number">13,921</span><span>$</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                    <span class="progress-description">
                        50% Increase in 28 Days
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card-box">
                <div class="card-head">
                    <header>Etudiant table</header>
                    <button id="panel-button8"
                        class="mdl-button mdl-js-button mdl-button--icon pull-right"
                        data-upgraded=",MaterialButton">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="panel-button8">
                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                        </li>
                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                        </li>
                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                            here</li>
                    </ul>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nom Prenom</th>
                                    <th>Date Nais</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>John Smith</td>
                                    <td> 12 déc 2004 </td>
                                    <td><a href="javascript:void(0)" class="" data-bs-toggle="tooltip"
                                            title="Edit">
                                            <i class="fa fa-check"></i></a>
                                        <a href="javascript:void(0)" class="text-inverse" title="Delete"
                                            data-bs-toggle="tooltip">
                                            <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Sneha Pandit</td>
                                    <td> 24 Nov 2001</td>
                                    <td><a href="javascript:void(0)" class="" data-bs-toggle="tooltip"
                                            title="Edit">
                                            <i class="fa fa-check"></i></a>
                                        <a href="javascript:void(0)" class="text-inverse" title="Delete"
                                            data-bs-toggle="tooltip">
                                            <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Sarah Smith</td>
                                    <td> 24 Nov 2001</td>
                                    <td><a href="javascript:void(0)" class="" data-bs-toggle="tooltip"
                                            title="Edit">
                                            <i class="fa fa-check"></i></a>
                                        <a href="javascript:void(0)" class="text-inverse" title="Delete"
                                            data-bs-toggle="tooltip">
                                            <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>John Deo</td>
                                    <td> 24 Nov 2001</td>
                                    <td><a href="javascript:void(0)" class="" data-bs-toggle="tooltip"
                                            title="Edit">
                                            <i class="fa fa-check"></i></a>
                                        <a href="javascript:void(0)" class="text-inverse" title="Delete"
                                            data-bs-toggle="tooltip">
                                            <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Jay Soni</td>
                                    <td> 24 Nov 2001</td>
                                    <td><a href="javascript:void(0)" class="" data-bs-toggle="tooltip"
                                            title="Edit">
                                            <i class="fa fa-check"></i></a>
                                        <a href="javascript:void(0)" class="text-inverse" title="Delete"
                                            data-bs-toggle="tooltip">
                                            <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
