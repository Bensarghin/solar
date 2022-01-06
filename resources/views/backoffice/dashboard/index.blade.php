@extends('backoffice.layout.master')

@section('content')
@section('content-title','Dashboard')
<div class="state-overview">
    <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-b-green">
                <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                <div class="info-box-content pt-4">
                    <span class="info-box-text">Total Etudiants</span>
                    <span class="info-box-number">{{$etudiants->count()}}</span>
                </div>
                <!-- /.info-box-content  pt-4 -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-b-yellow">
                <span class="info-box-icon push-bottom"><i class="material-icons">groupadd</i></span>
                <div class="info-box-content  pt-4">
                    <span class="info-box-text">Neuveau Etudiants</span>
                    <span class="info-box-number">155</span>
                </div>
                <!-- /.info-box-content  pt-4 -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-b-blue">
                <span class="info-box-icon push-bottom"><i class="material-icons">location_on</i></span>
                <div class="info-box-content  pt-4">
                    <span class="info-box-text">inscriptions ville</span>
                    <span class="info-box-number">52</span>
                </div>
                <!-- /.info-box-content  pt-4 -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-b-pink">
                <span class="info-box-icon push-bottom"><i
                        class="material-icons">apps</i></span>
                <div class="info-box-content  pt-4">
                    <span class="info-box-text">top pack</span>
                    <span class="info-box-number">13,921</span><span>$</span>
                </div>
                <!-- /.info-box-content  pt-4 -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
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
                    <a href="add_professor.html" id="addRow"
                    class="btn btn-info">
                    Ajouter etudiant <i class="fa fa-plus"></i>
                    </a>
                    <div class="table-responsive">
                        <table class="table table-striped custom-table table-hover">
                            <thead>
                                <tr>
                                    <th>CIN</th>
                                    <th>Nom Prenom</th>
                                    <th>Gender</th>
                                    <th>Date, Lieu Nais</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($etudiants as $etudiant)
                                <tr>
                                    <td>{{$etudiant->cin}}</td>
                                    <td>{{$etudiant->nom}} {{$etudiant->prenom}}</td>
                                    <td> {{$etudiant->gender}} </td>
                                    <td>{{$etudiant->date_nais}}, {{$etudiant->lieu_nais}}</td>
                                    <td>
                                        <a href="{{route('etudiant.profile',['id' => $etudiant->profile->id])}}" data-bs-toggle="tooltip"
                                            title="Profile">
                                            <i class="fa fa-user"></i></a> |
                                        <a href="{{route('etudiant.edit',['id' => $etudiant->profile->id])}}" data-bs-toggle="tooltip"
                                            title="Modifier">
                                            <i class="fa fa-check"></i></a> |
                                        <a href="" class="text-inverse" title="Supprimer"
                                            data-bs-toggle="tooltip">
                                            <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
