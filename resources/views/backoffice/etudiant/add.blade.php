@extends('backoffice.layout.master')

@section('content')
@section('content-title','Ajouter Etudiant')
    @if($errors->count()>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
    @if(Session::has('success'))
    <div class="alert alert-danger">
        <p>{{Session::get('success')}}</p>
    </div>
    @endif
<div class="row">
    <div class="col-sm-12">
        <form class="card-box" action="{{route('etudiant.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-head">
                <header>Etudiant</header>
            </div>
            <div class="card-body row">
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">Photo</label>
                    <div class="input-group mb-3">
                      <div class="custom-file">
                        <input type="file" accept="image/*" class="custom-file-input" id="inputGroupFile01" name="image">
                        <label class="custom-file-label" for="inputGroupFile01">choiser une image</label>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">CIN</label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{old('cin')}}"
                            id="txtFirstName" name="cin">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">Nom  <span class="required"> (* obligatoire) </span></label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{old('nom')}}"
                            id="txtFirstName" name="nom">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">Prénom <span class="required"> (* obligatoire) </span></label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{old('prenom')}}"
                            id="txtLasttName" name="prenom">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">Nom arab <span class="required"> (* obligatoire) </span></label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{old('nom_ar')}}" id="txtRollNo" name="nom_ar">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">Prenom arab <span class="required"> (* obligatoire) </span></label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text"
                            id="txtemail" value="{{old('prenom_ar')}}" name="prenom_ar">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">Date Nais <span class="required"> (* obligatoire) </span></label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="date" value="{{old('date_nais')}}"
                            id="date" name="date_nais">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">Lieu Nais <span class="required"> (* obligatoire) </span></label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{old('lieu_nais')}}"
                            id="date" name="lieu_nais">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label for="sample2" class="text-muted">Gender <span class="required"> (* obligatoire) </span></label>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input type="radio" {{old('gender')=='M'?'checked':''}} value="M" name="gender" id="male">
                        <label for="male">Masculin</label>
                        <input type="radio" {{old('gender')=='F'?'checked':''}} value="F" name="gender" id="female">
                        <label for="female">Feminin</label>
                    </div>
                </div>
                <hr>
                <!-- contact form -->
                <div class="card-head">
                    <header>Contact</header>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted" for="text5">Télephone <span class="required"> (* obligatoire) </span></label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{old('tele')}}"
                            pattern="-?[0-9]*(\.[0-9]+)?" id="text5" name="tele">
                        <span class="mdl-textfield__error">Number required!</span>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted" for="txtPNo">Whatsapp</label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{old('whatsapp')}}"
                            pattern="-?[0-9]*(\.[0-9]+)?" id="txtPNo" name="whatsapp">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">Télephone parents</label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{old('tele_parent')}}"
                            id="txtBloodGroup" name="tele_parent">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted" for="text7">Télephone fixe</label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="number" value="{{old('tele_fixe')}}"
                            id="txtBloodGroup" name="tele_fixe">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">Adresse <span class="required"> (* obligatoire) </span></label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{old('adresse')}}"
                            id="txtBloodGroup" name="adresse">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted" for="text7">Ville <span class="required"> (* obligatoire) </span></label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{old('ville_resident')}}"
                            id="txtBloodGroup" name="ville_resident">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted" for="text7">Code Postal</label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="number" value="{{old('code_postal')}}"
                            id="txtBloodGroup" name="code_postal">
                    </div>
                </div>
                <hr>

                <!-- info scolaire -->
                <div class="card-head">
                    <header>Info Scolaire</header>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label for="sample2" class="text-muted">Pack <span class="required"> (* obligatoire) </span></label>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input type="radio" {{old('pack')=='normal'?'checked':''}} 
                        name="pack" value="normal" id="normal">
                        <label for="normal">Normal</label>
                        <input type="radio" {{old('pack')=='premium'?'checked':''}} 
                        name="pack" value="premium" id="premium">
                        <label for="premium">Premium</label>
                        <input type="radio" {{old('pack')=='full'?'checked':''}} 
                        name="pack" value="full" id="full">
                        <label for="full">Full</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label for="sample2" class="text-muted">Bac Obtention <span class="required"> (* obligatoire) </span></label>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input type="radio" {{old('bac_niveau')=='actuel'?'checked':''}} 
                        name="bac_niveau" value="actuel" id="actuel">
                        <label for="actuel">Back acteul {{date('Y')}}</label>
                        <input type="radio" {{old('bac_niveau')=='aucien'?'checked':''}} 
                        name="bac_niveau" value="aucien" id="aucien">
                        <label for="aucien">Aucien bac</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">Filiér <span class="required"> (* obligatoire) </span></label>
                   <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                       <input class="mdl-textfield__input" type="text" value="{{old('filier')}}"
                         id="date" name="filier">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">Code massar</label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" value="{{old('code_massar')}}"
                            id="date" name="code_massar">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">Note régional <span class="required"> (* obligatoire) </span></label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="number"
                            id="txtemail" value="{{old('note_regional')}}" name="note_regional">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">Note global / 1er soumetre</label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="number"
                            id="txtemail" value="{{old('note_total')}}" name="note_total">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <label class="text-muted">Nom Etablissement actuel <span class="required"> (* obligatoire) </span></label>
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text"
                            id="txtemail" value="{{old('nom_etab')}}" name="nom_etab">
                    </div>
                </div>
                <div id="app">
                    <ville-region></ville-region>
                </div>
                <div class="col-lg-12 p-t-20">
                    <button type="submit"
                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
                        Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection