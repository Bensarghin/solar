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
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card-box">
                <div class="card-head">
                    <header>Filtrer</header>
                </div>
                <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group row">
                        <div class="mb-2">
                            <select class="form-select input-height" name="assttype">
                                <option value="">Bac Obtention ...</option>
                                <option value="Category 1">In Stock</option>
                                <option value="Category 2">Out Of Stock</option>
                                <option value="Category 3">Issue</option>
                                <option value="Category 3">Repair</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="mb-2">
                            <select class="form-select input-height" name="assttype">
                                <option value="">Pack ...</option>
                                <option value="Category 1">In Stock</option>
                                <option value="Category 2">Out Of Stock</option>
                                <option value="Category 3">Issue</option>
                                <option value="Category 3">Repair</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="mb-2">
                            <select class="form-select input-height" name="assttype">
                                <option value="">Filiér ...</option>
                                <option value="Category 1">In Stock</option>
                                <option value="Category 2">Out Of Stock</option>
                                <option value="Category 3">Issue</option>
                                <option value="Category 3">Repair</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="mb-2">
                            <select class="form-select input-height" name="assttype">
                                <option value="">Ville ...</option>
                                <option value="Category 1">In Stock</option>
                                <option value="Category 2">Out Of Stock</option>
                                <option value="Category 3">Issue</option>
                                <option value="Category 3">Repair</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Trier</button>
                </form>
            </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="card-box">
                <div class="card-head">
                    <header>Etudiant table</header>

                    <a href="{{route('etudiant.add')}}" data-type="dialog7" data-upgraded=",MaterialButton,MaterialRipple" id="addRow"
                    class="pull-right btn btn-info">
                    Ajouter etudiant <i class="fa fa-plus"></i>
                    </a>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table table-hover">
                            <thead>
                                <tr>
                                    <th></th>
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
                                    <td>
                                        @if($etudiant->image)
                                        <img src="{{asset('uploads/'.$etudiant->image)}}" class="img-thumbnail" width="40" height="40">
                                        @else
                                        <img src="{{asset('assets/img/default.png')}}" class="img-thumbnail" width="40" height="40">
                                        @endif
                                    </td>
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
                                        <a href="{{route('etudiant.destroy',['id' => $etudiant->id])}}" class="text-inverse" title="Supprimer"
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
