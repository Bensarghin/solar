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



         <section class="contact-page-section">
            <div class="auto-container">
                <div class="row">
                    <div class="form-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">

        <form class="card-box" action="{{route('etudiant.store')}}" method="POST" enctype="multipart/form-data">
            								<div class="row">

            @csrf
            <center>
                <h3>Etudiant</h3>
            </center>
            <div class="contact-form row">
            <center>
         	<div class="form-input">
            <div class="preview">
            <img src="{{asset('assset/images/Avatar.png')}}" id="inputGroupFile01-preview">
            </div>
            <label for="inputGroupFile01"><i class="fa fa-upload"></i></label>
            <input type="file" id="inputGroupFile01" name="image" accept="image/*" onchange="showPreview(event);">
            </div>
            </center>
            
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label>CIN</label>
                        <input type="text" value="{{old('cin')}}"
                            id="txtFirstName" name="cin">
                 </div>



                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label >Nom  <span class="required"> (* ) </span></label>
                        <input   type="text" value="{{old('nom')}}"
                            id="txtFirstName" name="nom">
                </div>

                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label >Prénom <span class="required"> (* ) </span></label>
                        <input class="mdl-textfield__input" type="text" value="{{old('prenom')}}"
                            id="txtLasttName" name="prenom">
                </div>

                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label >Nom arab <span class="required"> (* ) </span></label>
                        <input class="mdl-textfield__input" type="text" value="{{old('nom_ar')}}" id="txtRollNo" name="nom_ar">
                </div>

                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label>Prenom arab <span class="required"> (* ) </span></label>
                        <input type="text"
                            id="txtemail" value="{{old('prenom_ar')}}" name="prenom_ar">
                </div>

                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label >Date Nais <span class="required"> (* ) </span></label>
                  <input type="date" value="{{old('date_nais')}}"
                            id="date" name="date_nais">
                </div>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label >Lieu Nais <span class="required"> (* ) </span></label>
                        <input type="text" value="{{old('lieu_nais')}}"
                            id="date" name="lieu_nais">
                </div>

                <div class="col-lg-6 p-t-20">
                    <label for="sample2" class="text-muted">Gender <span class="required"> (* ) </span></label>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input type="radio" {{old('gender')=='M'?'checked':''}} value="M" name="gender" id="male">
                        <label for="male">Masculin</label>
                        <input type="radio" {{old('gender')=='F'?'checked':''}} value="F" name="gender" id="female">
                        <label for="female">Feminin</label>
                    </div>
                </div>
                <hr>
                <!-- contact form -->
               <center>
                <h3>Contact</h3>
              </center>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label  for="text5">Télephone <span class="required"> (* ) </span></label>
                        <input type="text" value="{{old('tele')}}"
                            pattern="-?[0-9]*(\.[0-9]+)?" id="text5" name="tele">
                        <span class="mdl-textfield__error">Number required!</span>
                </div>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label  for="txtPNo">Whatsapp</label>
                        <input class="mdl-textfield__input" type="text" value="{{old('whatsapp')}}" pattern="-?[0-9]*(\.[0-9]+)?" id="txtPNo" name="whatsapp">
                </div>

                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label>Télephone parents</label>
                        <input class="mdl-textfield__input" type="text" value="{{old('tele_parent')}}"
                            id="txtBloodGroup" name="tele_parent">
                </div>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label  for="text7">Télephone fixe</label>
                        <input class="mdl-textfield__input" type="number" value="{{old('tele_fixe')}}"  id="txtBloodGroup" name="tele_fixe">
                </div>

                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label >Adresse <span class="required"> (* ) </span></label>
                        <input class="mdl-textfield__input" type="text" value="{{old('adresse')}}"
                            id="txtBloodGroup" name="adresse">
                </div>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label  for="text7">Ville <span class="required"> (* ) </span></label>
                        <input class="mdl-textfield__input" type="text" value="{{old('ville_resident')}}"
                            id="txtBloodGroup" name="ville_resident">
                </div>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label  for="text7">Code Postal</label>
                        <input class="mdl-textfield__input" type="number" value="{{old('code_postal')}}"  id="txtBloodGroup" name="code_postal">
                </div>

                <hr>

                <!-- info scolaire -->
           
                <center>
                <h3>Info Scolaire</h3>
                 </center>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label for="sample2" class="text-muted">Pack <span class="required"> (* ) </span></label>
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
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label for="sample2" class="text-muted">Bac Obtention <span class="required"> (* ) </span></label>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input type="radio" {{old('bac_niveau')=='actuel'?'checked':''}} 
                        name="bac_niveau" value="actuel" id="actuel">
                        <label for="actuel">Back acteul {{date('Y')}}</label>
                        <input type="radio" {{old('bac_niveau')=='aucien'?'checked':''}} 
                        name="bac_niveau" value="aucien" id="aucien">
                        <label for="aucien">Aucien bac</label>
                    </div>
                </div>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label>Filiér <span class="required"> (* ) </span></label>
                       <input class="mdl-textfield__input" type="text" value="{{old('filier')}}" id="date" name="filier">
                </div>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label class="text-muted">Code massar</label>
                        <input class="mdl-textfield__input" type="text" value="{{old('code_massar')}}" id="date" name="code_massar">
                </div>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label >Note régional <span class="required"> (* ) </span></label>
                        <input class="mdl-textfield__input" type="number" id="txtemail" value="{{old('note_regional')}}" name="note_regional">
                </div>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label class="text-muted">Note global / 1er soumetre</label>
                        <input class="mdl-textfield__input" type="number"
                            id="txtemail" value="{{old('note_total')}}" name="note_total">
                </div>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <label class="text-muted">Nom Etablissement actuel <span class="required"> (* ) </span></label>
                        <input class="mdl-textfield__input" type="text"  id="txtemail" value="{{old('nom_etab')}}" name="nom_etab">
                </div>

                <div id="app">
                    <ville-region></ville-region>
                </div>
                <center>
                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                    <button type="submit"
                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
                        Enregistrer</button>
                </div>
                </center>
            </div>
        </form>
    </div>
</div></div>
  </div>
</div>

</section>
@endsection