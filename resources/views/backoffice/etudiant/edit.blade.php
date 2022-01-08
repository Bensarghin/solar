@extends('backoffice.layout.master')

@section('content')
@section('content-title','Modifier Etudiant')

{{-- <div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-head">
                <header>Etudiant</header>
                <button id="panel-button"
                    class="mdl-button mdl-js-button mdl-button--icon pull-right"
                    data-upgraded=",MaterialButton">
                    <i class="material-icons">more_vert</i>
                </button>
                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    data-mdl-for="panel-button">
                    <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                    </li>
                    <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                    </li>
                    <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                        here</li>
                </ul>
            </div>
            <div class="card-body row">
                <div class="col-lg-12 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{$profile->etudiant->cin}}"
                            id="txtFirstName" name="cin+
                            2jjjkkk
                            ">
                        <label class="mdl-textfield__label">CIN</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{$profile->etudiant->nom}}"
                            id="txtFirstName" name="nom">
                        <label class="mdl-textfield__label">Nom</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{$profile->etudiant->prenom}}"
                            id="txtLasttName" name="prenom">
                        <label class="mdl-textfield__label">Prénom</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{$profile->etudiant->nom_ar}}" id="txtRollNo" name="nom_ar">
                        <label class="mdl-textfield__label">Nom arab</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text"
                            id="txtemail" value="{{$profile->etudiant->prenom_ar}}">
                        <label class="mdl-textfield__label">Prenom arab</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="date" value="{{$profile->etudiant->date_nais}}"
                            id="date" name="date_nais">
                        <label class="mdl-textfield__label">Date Nais</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{$profile->etudiant->lieu_nais}}"
                            id="date" name="lieu_nais">
                        <label class="mdl-textfield__label">Lieu Nais</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                        <input class="mdl-textfield__input" type="text" id="list2" value="Commerce"
                            readonly tabIndex="-1">
                        <label for="list2" class="pull-right margin-0">
                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                        </label>
                        <label for="list2" class="mdl-textfield__label">Class</label>
                        <ul data-mdl-for="list2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                            <li class="mdl-menu__item" data-val="DE">Computer</li>
                            <li class="mdl-menu__item" data-val="BY">Mechanical</li>
                            <li class="mdl-menu__item" data-val="BY">Mathematics</li>
                            <li class="mdl-menu__item" data-val="BY">Commerce</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                        <input class="mdl-textfield__input" type="text" id="sample2" value="Female"
                            readonly tabIndex="-1">
                        <label for="sample2" class="pull-right margin-0">
                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                        </label>
                        <label for="sample2" class="mdl-textfield__label">Gender</label>
                        <ul data-mdl-for="sample2"
                            class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                            <li class="mdl-menu__item" data-val="DE">Male</li>
                            <li class="mdl-menu__item" data-val="BY">Female</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="1234567890"
                            pattern="-?[0-9]*(\.[0-9]+)?" id="text5">
                        <label class="mdl-textfield__label" for="text5">Mobile Number</label>
                        <span class="mdl-textfield__error">Number required!</span>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="Pradip Mehra"
                            id="txtParentName">
                        <label class="mdl-textfield__label">Parents Name</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="1234567890"
                            pattern="-?[0-9]*(\.[0-9]+)?" id="txtPNo">
                        <label class="mdl-textfield__label" for="txtPNo">Parents Mobile
                            Number</label>
                        <span class="mdl-textfield__error">Number required!</span>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="1987-08-13"
                            id="dateOfBirth">
                        <label class="mdl-textfield__label">Birth Date</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="O+"
                            id="txtBloodGroup">
                        <label class="mdl-textfield__label">Blood Group</label>
                    </div>
                </div>
                <div class="col-lg-12 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield txt-full-width">
                        <textarea class="mdl-textfield__input" rows="4"
                            id="text7">45, Shivani park, Mumbai-678765</textarea>
                        <label class="mdl-textfield__label" for="text7">Address</label>
                    </div>
                </div>
                <div class="col-lg-12 p-t-20">
                    <label class="control-label col-md-3">Upload Photo
                    </label>
                    <div class="col-md-12">
                        <div id="id_dropzone" class="dropzone"></div>
                    </div>
                </div>
                <div class="col-lg-12 p-t-20 text-center">
                    <button type="button"
                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
                    <button type="button"
                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div> --}}
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
                    <div class="mdl-tabs__panel is-active p-t-20" id="tab4-panel">
                        <div class="table-responsive">
                            <form action="">
                                <div class="card-box">
                                    <div class="card-head">
                                        <header>Etudiant</header>
                                    </div>
                                    <div class="card-body row">
                                        <div class="col-lg-12 p-t-20">
                                            <label class="text-muted">CIN</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->etudiant->cin}}"
                                                    id="txtFirstName" name="cin+
                                                    2jjjkkk
                                                    ">
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
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->etudiant->nom_ar}}" id="txtRollNo" name="nom_ar">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Prenom arab</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text"
                                                    id="txtemail" value="{{$profile->etudiant->prenom_ar}}">
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
                                                    <input  type="radio" name="gender" value="F" {{$profile->etudiant->gender=="F"?'checked':''}} id="f">
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
                            </form>
                        </div>
                    </div>
                    <div class="mdl-tabs__panel p-t-20" id="tab5-panel">
                        <div class="table-responsive">
                            <form action="">
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
                                                    id="txtFirstName" name="cin+
                                                    2jjjkkk
                                                    ">
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
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->contact->tele_parent}}" id="txtRollNo" name="tele_parent">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Email</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text"
                                                    id="txtemail" value="{{$profile->contact->email}}" name="email">
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
                            </form>
                        </div>
                    </div>
                    <div class="mdl-tabs__panel p-t-20" id="tab6-panel">
                        <div class="table-responsive">
                            <form action="">
                                <div class="card-box">
                                    <div class="card-head">
                                        <header>Info Scolaire</header>
                                    </div>
                                    <div class="card-body row">
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Pack</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->scolaire->pack}}"
                                                    id="txtFirstName" name="pack">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Bac année</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->scolaire->bac_niveau}}"
                                                    id="txtFirstName" name="bac_niveau">
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
                                            <label class="text-muted">Filièr</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="{{$profile->scolaire->filier}}" id="txtRollNo" name="filier">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-t-20">
                                            <label class="text-muted">Région</label>
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" type="text"
                                                    id="txtemail" value="{{$profile->scolaire->region}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 p-t-20 text-center">
                                            <button type="submit"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Enregistrer</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection