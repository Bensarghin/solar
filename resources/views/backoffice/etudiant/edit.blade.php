@extends('backoffice.layout.master')

@section('content')
@section('content-title','Modifier Etudiant')
@if($errors->count()>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</div>
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-head">
                <header>Rejoindre à : {{$profile->created_at->format('d M Y')}}</header>
            </div>
            <div class="card-body ">
                <div class="mdl-tabs mdl-js-tabs">
                    <div class="mdl-tabs__tab-bar tab-left-side">
                        <a href="#tab4-panel"
                            class="mdl-tabs__tab tabs_three is-active">Etudiant</a>
                        <a href="#tab5-panel" class="mdl-tabs__tab tabs_three">Contact</a>
                        <a href="#tab6-panel" class="mdl-tabs__tab tabs_three">Info Scolaire</a>
                    </div>
                    <form action="{{route('etudiant.update',['id' => $profile->etudiant->id ])}}" method="POST" class="mdl-tabs__panel is-active p-t-20" id="tab4-panel" enctype="multipart/form-data">
                        @csrf
                        <div class="table-responsive">
                                <div class="card-box">
                                    <div class="card-head">
                                        <header>Etudiant</header>
                                    </div>
                                    <div class="card-body row">
                                        <div class="col-lg-6 p-t-20">
                                            @if($profile->etudiant->image)
                                            <img src="{{asset('uploads/'.$profile->etudiant->image)}}" id="output" class="img-thumbnail" width="200" height="200" alt="">
                                            @else
                                            <img src="{{asset('assets/img/default.png')}}" id="output" class="img-thumbnail" width="200" height="200" alt="">
                                            @endif
                                            <!-- <img src="..." alt="..." class="img-thumbnail"> -->
                                            <div class="input-group mb-3">
                                              <div class="custom-file">
                                                <input type="file" accept="image/*" class="custom-file-input" onchange="loadFile(event)" id="inputGroupFile01" name="image">
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">CIN</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->etudiant->cin}}"
                                                    id="txtFirstName" name="cin">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Nom</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->etudiant->nom}}"
                                                    id="txtFirstName" name="nom">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Prénom</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->etudiant->prenom}}"
                                                    id="txtLasttName" name="prenom">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Nom arab</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->etudiant->nom_ar}}" 
                                                    id="txtRollNo" name="nom_ar">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Prenom arab</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text"
                                                    id="txtemail" name="prenom_ar" value="{{$profile->etudiant->prenom_ar}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Date Nais</label>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="date" value="{{$profile->etudiant->date_nais}}"
                                                    id="date" name="date_nais">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Lieu Nais</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->etudiant->lieu_nais}}"
                                                    id="date" name="lieu_nais">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <div
                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                
                                                <label class="text-muted">Gender</label>
                                                <div class="mdl-textfield__input">
                                                    <input type="radio" name="gender" value="M" {{$profile->etudiant->gender=="M"?'checked':''}} id="m">
                                                    <label for="m">Masculin</label>
                                                    <input type="radio" name="gender" value="F" {{$profile->etudiant->gender=="F"?'checked':''}} id="f">
                                                    <label for="f">Feminin</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 p-t-20 text-center">
                                            <button type="submit"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Enregistrer</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </form>
                    <form action="{{route('contact.update',['id' => $profile->contact->id ])}}" method="POST" class="mdl-tabs__panel p-t-20" id="tab5-panel">
                        @csrf
                        <div class="table-responsive">
                                <div class="card-box">
                                    <div class="card-head">
                                        <header>Contact</header>
                                    </div>
                                    <div class="card-body row">
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Télephone</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->contact->tele}}"
                                                    id="txtFirstName" name="tele">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Whatsapp</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->contact->whatsapp}}"
                                                    id="txtFirstName" name="whatsapp">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Télephone Fixe</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->contact->tele_fixe}}"
                                                    id="txtLasttName" name="tele_fixe">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Télephone Parent</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->contact->tele_parent}}" 
                                                id="txtRollNo" name="tele_parent">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Adresse</label>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->contact->adresse}}"
                                                    id="date" name="adresse">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Ville résident</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->contact->ville_resident}}"
                                                    id="date" name="ville_resident">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Code postal</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->contact->code_postal}}"
                                                    id="number" name="code_postal">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 p-t-20 text-center">
                                            <button type="submit"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Enregistrer</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </form>
                    <form action="{{route('scolaire.update',['id' => $profile->scolaire->id ])}}" method="POST" class="mdl-tabs__panel p-t-20" id="tab6-panel">
                        @csrf
                        <div class="table-responsive">
                                <div class="card-box">
                                    <div class="card-head">
                                        <header>Info Scolaire</header>
                                    </div>
                                    <div class="card-body row">
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <label for="sample2" class="text-muted">Pack <span class="required"> (* ) </span></label><br>
                                            <input type="radio" {{$profile->scolaire->pack=='sn'?'checked':''}} name="pack" value="sn" required id="sn">
                                             <label for="sn">Pack Sciences Normal</label> <b class="text-primary">|</b>  
                                            <input type="radio" {{$profile->scolaire->pack=='sp'?'checked':''}} name="pack" value="sp" required id="sp">
                                            <label for="sp">Pack Sciences Plus </label> <b class="text-primary">|</b> 
                                            <input type="radio" {{$profile->scolaire->pack=='etl'?'checked':''}} name="pack" value="etl" required id="etl">
                                            <label for="etl">Pack Economie, Techniques et Lettres </label> <b class="text-primary">|</b>
                                            <input type="radio" {{$profile->scolaire->pack=='ep'?'checked':''}} name="pack" value="ep" required id="ep">
                                            <label for="ep">Pack Economie Plus </label>
                                        </div>
                                        <div class="col-lg-12 p-t-20">
                                            <label for="sample2" class="text-muted">Bac Obtention <span class="required"> (* obligatoire) </span></label>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input type="radio" {{$profile->scolaire->bac_niveau=='actuel'?'checked':''}} 
                                                name="bac_niveau" value="actuel" id="actuel">
                                                <label for="actuel">Back actuel {{date('Y')}}</label> <b class="text-primary">|</b>
                                                <input type="radio" {{$profile->scolaire->bac_niveau=='aucien'?'checked':''}} 
                                                name="bac_niveau" value="aucien" id="aucien">
                                                <label for="aucien">Aucien bac</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Filièr </label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <select class="form-select input-height" name="filier" id="" required>
                                                    <option disabled selected>....</option>
                                                    <option value="Sciences Economiques" {{$profile->scolaire->filier=='Sciences Economiques'?'selected':''}}>Sciences Economiques</option>
                                                    <option value="Sciences de Gestion et de Comptabilité" {{$profile->scolaire->filier=='Sciences de Gestion et de Comptabilité'?'selected':''}}>Sciences de Gestion et de Comptabilité</option>
                                                    <option value="Sciences et Technologies Mécaniques" {{$profile->scolaire->filier=='Sciences de Gestion et de Comptabilité'?'selected':''}}>Sciences et Technologies Mécaniques</option>
                                                    <option value="Sciences et Technologies Electriques" {{$profile->scolaire->filier=='Sciences de Gestion et de Comptabilité'?'selected':''}}>Sciences et Technologies Electriques</option>
                                                    <option value="Lettres" {{$profile->scolaire->filier=='Lettres'?'selected':''}}>Lettres</option>
                                                    <option value="Sciences Humaines" {{$profile->scolaire->filier=='Sciences Humaines'?'selected':''}}>Sciences Humaines</option>
                                                    <option value="Sciences agronomiques" {{$profile->scolaire->filier=='Sciences agronomiques'?'selected':''}}>Sciences agronomiques</option>
                                                    <option value="Arts Appliqués" {{$profile->scolaire->filier=='Arts Appliqués'?'selected':''}}>Arts Appliqués</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Code massar</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->scolaire->code_massar}}"
                                                    id="txtLasttName" name="code_massar">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Note régional</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="number"
                                                    id="txtemail" value="{{$profile->scolaire->note_regional}}" name="note_regional">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label for=""  class="text-muted">Note du 1er semestre 2ème année baccalauréat (Si disponible)</label>
                                            <div
                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <input type="text" value="{{$profile->scolaire->Note_semestre}}" class="mdl-textfield__input" name="Note_semestre" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20" >
                                            <label for=""  class="text-muted">Note Examen national</label><div
                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <input type="text" class="mdl-textfield__input" name="Examen_National" placeholder="" value="{{$profile->scolaire->Examen_National}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Note générale de bac</label>
                                            <div
                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="number"
                                                    id="txtemail" value="{{$profile->scolaire->note_total}}" name="note_total">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Nom Etablissement actuel</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text"
                                                    id="txtemail" value="{{$profile->scolaire->nom_etab_actuel}}" name="nom_etab">
                                            </div>
                                        </div>
                                        <div id="app">
                                            <div class="row  p-t-20">
                                                <label class="text-muted col-md-3">Région
                                                    <span> (* obligatoire) </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-select input-height" name="region">
                                                        <option value="">Select...</option>
                                                        @foreach($regions as $region)
                                                        <option {{$region['region']==$profile->scolaire->region?'selected':''}} value="{{$region['region']}}">{{$region['region']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row  p-t-20">
                                                <label class="text-muted col-md-3">Ville
                                                    <span> (* obligatoire) </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-select input-height" name="ville">
                                                        <option disabled>Select...</option>
                                                        @foreach($villes as $ville)
                                                        <option {{$ville['ville']==$profile->scolaire->ville_etab_actuel?'selected':''}} value="{{$ville['ville']}}">{{$ville['ville']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 p-t-20 text-center">
                                            <button type="submit"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Enregistrer</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection