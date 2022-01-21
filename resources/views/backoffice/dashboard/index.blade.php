@extends('backoffice.layout.master')

@section('content')
@section('content-title','Dashboard')
<div class="state-overview">
    <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-b-green">
                <span class="info-box-icon push-bottom"><i class="material-icons">lock</i></span>
                <div class="info-box-content pt-4">
                    <span class="info-box-text">Auth</span>
                    <span class="info-box-number">{{$users->count()}}</span>
                </div>
                <!-- /.info-box-content  pt-4 -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-b-yellow">
                <span class="info-box-icon push-bottom"><i class="material-icons">border_color</i></span>
                <div class="info-box-content  pt-4">
                    <span class="info-box-text">Inscriptions</span>
                    <span class="info-box-number">{{$etudiants->count()}}</span>
                </div>
                <!-- /.info-box-content  pt-4 -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-b-blue">
                <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
                <div class="info-box-content  pt-4">
                    <span class="info-box-text">Etudiants</span>
                    <span class="info-box-number">{{$profiles->count()}}</span>
                </div>
                <!-- /.info-box-content  pt-4 -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
            <div class="info-box bg-b-pink">
                <span class="info-box-icon push-bottom"><i
                        class="material-icons">group</i></span>
                <div class="info-box-content  pt-4">
                    <span class="info-box-text">Subscribe</span>
                    <span class="info-box-number">{{$Subscribe->count()}}</span><span></span>
                </div>
                <!-- /.info-box-content  pt-4 -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card-box">
                <div class="card-head">
                    <header>Filtrer</header>
                </div>
                <div class="card-body">
                <form action="{{route('filtrer')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="mb-2">
                            <select class="form-select input-height" name="bac_niveau">
                                <option selected>Bac Obtention ...</option>
                                <option value="aucien">Ancien Bac</option>
                                <option value="actuel">Bac {{date('Y')}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="mb-2">
                            <select class="form-select input-height" name="pack">
                                <option selected>Pack ...</option>
                                <option value="sn">Science Normal</option>
                                <option value="sp">Science Plus</option>
                                <option value="etl">Economie, Technique, et Letteres</option>
                                <option value="ep">Economie Plus</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="mb-2">
                            <select class="form-select input-height" name="filier">
                                <option  selected>Filiér ...</option>
                                <option value="Sciences Economiques">Sciences Economiques</option>
                                <option value="Sciences de Gestion et de Comptabilité">Sciences de Gestion et de Comptabilité</option>
                                <option value="Sciences et Technologies Mécaniques">Sciences et Technologies Mécaniques</option>
                                <option value="Sciences et Technologies Electriques">Sciences et Technologies Electriques</option>
                                <option value="Lettres">Lettres</option>
                                <option value="Sciences Humaines">Sciences Humaines</option>
                                <option value="Sciences agronomiques">Sciences agronomiques</option>
                                <option value="Arts Appliqués">Arts Appliqués</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="mb-2">
                            <select class="form-select input-height" name="region">
                                <option selected>Region ...</option>
                                @foreach($regions as $region)
                                <option value="{{$region['region']}}">{{$region['region']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Trier</button>
                </form>
            </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card-box">
                <div class="card-head">
                    <header>Etudiant table</header>

                    <a href="{{route('etudiant.add')}}" data-type="dialog7" data-upgraded=",MaterialButton,MaterialRipple" id="addRow"
                    class="pull-right btn btn-info">
                    Ajouter etudiant <i class="fa fa-plus"></i>
                    </a>
                </div>
                <div class="card-body ">
                    <div class="table-responsive" style="width: 100% !important;">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>CIN</th>
                                    <th>Nom Prenom</th>
                                    <th>Gender</th>
                                    <th>Date, Lieu Nais</th>
                                    <th>Rejoindre</th>
                                    <th>Etab Actuel</th>
                                    <th>Ville</th>
                                    <th>Payer</th>
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
                                    <th>{{$etudiant->profile->created_at->diffForHumans()}}</th>
                                    <th>{{$etudiant->profile->scolaire->nom_etab_actuel}}</th>
                                    <th>{{$etudiant->profile->scolaire->ville_etab_actuel}}</th>
                                    <th>
                                        @if($etudiant->payer == false)
                                        <a href="{{route('pay.update',['id'=> $etudiant->id])}}" class="text-danger"> <i class="fa fa-times fa-1x"></i></a>
                                        @else
                                        <a href="{{route('pay.update',['id'=> $etudiant->id])}}" class="text-success"> <i class="fa fa-check-circle  fa-1x"></i></a>
                                        @endif
                                    </th>
                                    <td>
                                        <a href="{{route('etudiant.profile',['id' => $etudiant->profile->id])}}" data-bs-toggle="tooltip"
                                            title="Profile">
                                            <i class="fa fa-user"></i></a> |
                                        <a href="{{route('etudiant.edit',['id' => $etudiant->profile->id])}}" data-bs-toggle="tooltip"
                                            title="Modifier">
                                            <i class="fa fa-check"></i></a> |
                                        <a href="{{route('etudiant.destroy',['id' => $etudiant->id])}}" onclick="return confirm('Vous voulez vraiment supprimer ce enregistrement??!!');" class="text-inverse" title="Supprimer"
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
