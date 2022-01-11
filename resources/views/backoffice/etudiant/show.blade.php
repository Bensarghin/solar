@extends('backoffice.layout.master')

@section('content')
@section('content-title','Etudiant Profile')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <div class="card">
                <div class="card-body no-padding height-9">
                    <div class="row">
                        <div class="profile-userpic">
                            <img src="{{asset('assets/img/std/std3.jpg')}}" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">{{$profile->etudiant->nom}} {{$profile->etudiant->prenom}}</div>
                    </div>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Nom&prenom (ar)</b> <a class="pull-right">{{$profile->etudiant->nom_ar}} {{$profile->etudiant->prenom_ar}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>cin</b> <a class="pull-right">{{$profile->etudiant->gender}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Date nais</b> <a class="pull-right">{{$profile->etudiant->date_nais}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Lieu Nais</b> <a class="pull-right">{{$profile->etudiant->lieu_nais}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Gender</b> <a class="pull-right">{{$profile->etudiant->gender}}</a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <a href="{{route('etudiant.edit',['id'=>$profile->id])}}"
                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary">
                            Modifier
                        </a>
                        <button type="button"
                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-pink">
                            Supprimer
                        </button>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                </div>
            </div>
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            <div class="row">
                <div class="card">
                    <div class="card-topline-aqua">
                        <header></header>
                    </div>
                    <div class="white-box">
                        <!-- Tab panes -->
                        <div class="p-rl-20">
                            <ul class="nav customtab nav-tabs" role="tablist">
                                <li class="nav-item"><a href="#tab1" class="nav-link active" data-bs-toggle="tab">Contact</a></li>
                                <li class="nav-item"><a href="#tab2" class="nav-link" data-bs-toggle="tab">Informations Scolaires
                                </a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                <div id="biography">
                                    <div class="row">
                                        <div class="col-md-3 col-6 b-r"> <strong>téléphone</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->contact->tele}}</p>
                                        </div>
                                        <div class="col-md-3 col-6"> <strong>fixe</strong>
                                            <br>
                                            <p class="text-muted">{{isset($profile->contact->tele_fixe)?$profile->contact->tele_fixe:'pas téle'}}</p>
                                        </div>
                                        <div class="col-md-3 col-6 b-r"> <strong>Télephone parent</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->contact->tele_parent}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 col-6 b-r"> <strong>whatsapp</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->contact->whatsapp}}</p>
                                        </div>
                                        <div class="col-md-3 col-6 b-r"> <strong>Email</strong>
                                            <br>
                                            <p class="text-muted"><a href="https://radixtouch.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="94e0f1e7e0d4f1ecf5f9e4f8f1baf7fbf9">{{$profile->contact->email}}</a></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 col-6 b-r"> <strong>Adresse</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->contact->adresse}}</p>
                                        </div>
                                        <div class="col-md-3 col-6 b-r"> <strong>ville</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->contact->ville_resident}}</p>
                                        </div>
                                        <div class="col-md-3 col-6"> <strong>code postal</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->contact->code_postal}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div id="biography"> 
                                    <div class="row">
                                        <div class="col-md-3 col-6 b-r"> <strong>Pack</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->scolaire->pack}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 col-6 b-r"> <strong>bac niveau</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->scolaire->bac_niveau}}</p>
                                        </div>
                                        <div class="col-md-3 col-6 b-r"> <strong>filier</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->scolaire->filier}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3 col-6"> <strong>code massar</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->scolaire->code_massar}}</p>
                                        </div>
                                        <div class="col-md-3 col-6"> <strong>Region</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->scolaire->region}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>
@endsection