@extends('backoffice.layout.master')

@section('content')
@section('content-title','Etudiant Profile')
<div class="rol">
       <a href="{{route('etudiants')}}" style="color: #ffffff;" >All etudiant</a>

</div>
<div class="row">
     
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <div class="card">
                <div class="card-body no-padding height-9">
                    <div class="row">
                        <div class="profile-userpic">
                            @if($profile->etudiant->image)
                            <img src="{{asset('uploads/'.$profile->etudiant->image)}}" class="img-responsive" alt="">
                            @else
                            <img src="{{asset('assets/img/default.png')}}" class="img-responsive" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">{{$profile->etudiant->nom}} {{$profile->etudiant->prenom}}</div>
                    </div>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Nom&prenom (ar)</b> :{{$profile->etudiant->nom_ar}} {{$profile->etudiant->prenom_ar}}</a>
                        </li>
                        <li class="list-group-item">
<<<<<<< HEAD
                            <b>CIN</b> <a class="pull-right">{{$profile->etudiant->cin}}</a>
=======
                            <b>cin</b> :{{$profile->etudiant->cin}}
>>>>>>> visiteur
                        </li>
                        <li class="list-group-item">
                            <b>Date nais</b> :{{$profile->etudiant->date_nais}}
                        </li>
                        <li class="list-group-item">
                            <b>Lieu Nais</b> :{{$profile->etudiant->lieu_nais}}
                        </li>
                        <li class="list-group-item">
                            <b>Gender</b> :{{$profile->etudiant->gender}}
                        </li>
                    </ul>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                  
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
                                        <div class="col-md-4 col-6 b-r"> <strong>téléphone</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->contact->tele}}</p>
                                        </div>
                                        <div class="col-md-4 col-6"> <strong>fixe</strong>
                                            <br>
                                            <p class="{{isset($profile->contact->tele_fixe)?'text-muted':'text-danger'}}">{{isset($profile->contact->tele_fixe)?$profile->contact->tele_fixe:'pas donnée'}}</p>
                                        </div>
                                        <div class="col-md-4 col-6 b-r"> <strong>Télephone parent</strong>
                                            <br>
                                            <p class="{{isset($profile->contact->tele_parent)?'text-muted':'text-danger'}}">{{isset($profile->contact->tele_parent)?$profile->contact->tele_parent:'pas donnée'}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4 col-6 b-r"> <strong>whatsapp</strong>
                                            <br>
                                            <p class="{{isset($profile->contact->whatsapp)?'text-muted':'text-danger'}}">{{isset($profile->contact->whatsapp)?$profile->contact->whatsapp:'pas donnée'}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4 col-6 b-r"> <strong>Adresse</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->contact->adresse}}</p>
                                        </div>
                                        <div class="col-md-4 col-6 b-r"> <strong>ville</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->contact->ville_resident}}</p>
                                        </div>
                                        <div class="col-md-4 col-6"> <strong>code postal</strong>
                                            <br>
                                            <p class="{{isset($profile->contact->code_postal)?'text-muted':'text-danger'}}">{{isset($profile->contact->code_postal)?$profile->contact->code_postal:'pas donnée'}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <!-- info scolaire details -->
                            <div class="tab-pane" id="tab2">
                                <div id="biography"> 
                                    <div class="row">
                                        <div class="col-md-4 col-3 b-r"> <strong>Pack</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->scolaire->pack}}</p>
                                        </div>
                                        <div class="col-md-4 col-6 b-r"> <strong>bac obtention</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->scolaire->bac_niveau}}</p>
                                        </div>
                                        <div class="col-md-4 col-6 b-r"> <strong>filier</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->scolaire->filier}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4 col-6"> <strong>code massar</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->scolaire->code_massar}}</p>
                                        </div>
                                        <div class="col-md-4 col-6 b-r"> <strong>note regional</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->scolaire->note_regional}}</p>
                                        </div>
                                        <div class="col-md-4 col-6 b-r"> <strong>note total / 1er soumetre</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->scolaire->note_total}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4 col-6"> <strong>Etablissement actuel</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->scolaire->nom_etab_actuel}}</p>
                                        </div>
                                        <div class="col-md-4 col-6"> <strong>Region</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->scolaire->region}}</p>
                                        </div>
                                        <div class="col-md-4 col-6"> <strong>Ville</strong>
                                            <br>
                                            <p class="text-muted">{{$profile->scolaire->ville_etab_actuel}}</p>
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