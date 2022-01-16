@extends('layouts.master')
@section('content')
<!--
<section class="page-title" style="background-image:url({{asset('assset/images/background/22.png')}});">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Contact Us</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
-->
	@if(Session::has('success'))
		<div class="alert alert-success text-center">
			<p>{{__('messages.success')}}</p>
			
		</div>
	@endif
     <section class="contact-page-section">
            <div class="auto-container">
                <div class="row">
                    <div class="form-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title text-center">
							<h2>{{ __('layout.modifier-profile')}}</h2>
                            </div>
							@if($errors->count()>0)
								<div class="alert alert-danger">
									@foreach($errors->all() as $error)
									<li>{{$error}}</li>
									@endforeach
								</div>
							@endif
                            <div class="contact-form">
                                <form action="{{route('user.update')}}" method="POST" enctype="multipart/form-data">
									@csrf
								<center>
								<div class="form-input">
								<div class="preview">
								@if(Auth::user()->profile->etudiant->image)
								<img src="{{asset('uploads/'.Auth::user()->profile->etudiant->image)}}" id="file-ip-1-preview">
								@else
								<img src="{{asset('assset/images/avatar.png')}}" id="file-ip-1-preview">
								@endif
								</div>
								<label for="file-ip-1"><i class="fa fa-upload"></i></label>
								<input type="file" id="file-ip-1" name="image" accept="image/*" onchange="showPreview(event);">
								</div>
								</center>
								<div class="row text-center">
                                    <br>
										<div class="form-group col-lg-12 col-md-12 col-sm-12"> 
											<label for="cin">{{__('etudiant.cin')}}</label>
											<input type="text" value="{{Auth::user()->profile->etudiant->cin}}" name="cin" placeholder="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
											<label for="">{{__('etudiant.nom')}} (*)</label>
											<input type="text" value="{{Auth::user()->profile->etudiant->nom}}" name="nom" placeholder="" required="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> 
											<label for="">{{__('etudiant.prenom')}} (*)</label>
											<input type="text" value="{{Auth::user()->profile->etudiant->prenom}}" name="prenom" placeholder="" required="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> 
											<label for="">{{__('etudiant.nom_ar')}} (*)</label>
											<input type="text" value="{{Auth::user()->profile->etudiant->nom_ar}}" dir="RTL" name="nom_ar" placeholder="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
											<label for="">{{__('etudiant.prenom_ar')}} (*)</label> 
											<input type="text" value="{{Auth::user()->profile->etudiant->prenom_ar}}" dir="RTL" name="prenom_ar" placeholder="" required="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">  
											<label for="">Date de naissance (*)</label>
											<input type="date" name="date_nais" id="date" placeholder="" value="{{Auth::user()->profile->etudiant->date_nais}}" required="">
										</div>
										<div class="form-group col-lg-6 col-md-12 col-sm-12">  
											<label for="">Lieu de naissance (*)</label>
											<input type="text" value="{{Auth::user()->profile->etudiant->lieu_nais}}" name="lieu_nais" id="date" placeholder="" required="">
										</div>
                                        
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">  
											<label for="">Sexe</label> <br>
                                        <label class="container-radio">Feminin
                                        <input type="radio" name="gender" {{Auth::user()->profile->etudiant->gender=='F'?'checked':''}} value="F" required>
                                        <span class="checkmark"></span>
                                        </label>
                                        <label class="container-radio">Masculin
                                        <input type="radio" {{Auth::user()->profile->etudiant->gender=='M'?'checked':''}} name="gender" value="M" required>
                                        <span class="checkmark"></span>
                                        </label>
                                        </div>
										</div>
											<div class="sec-title text-center">
												<h2>Contact </h2>
											</div>
										<div class="row">
                                          <br>
											<div class="form-group col-lg-6 col-md-12 col-sm-12">
												<label for="">Téléphone SMS (Pour recevoir des sms) (*)</label>
												<input type="text" name="tele" placeholder="" required="" value="{{Auth::user()->profile->contact->tele}}" >
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12">  
												<label>Téléphone WhatsApp</label>
												<input type="text" value="{{Auth::user()->profile->contact->whatsapp}}" name="whatsapp" id="date" placeholder="">
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
												<label for="">Téléphone des parents</label>
												<input type="text" name="tele_parent" placeholder="" value="{{Auth::user()->profile->contact->tele_parent}}" >
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
												<label for="">Téléphone fixe</label>
												<input type="text" name="tele_fixe" placeholder="" value="{{Auth::user()->profile->contact->tele_fixe}}">
											</div>
											<div class="form-group col-lg-12 col-md-12 col-sm-12">
												<label for="">Adresse (*)</label>
												<textarea name="adresse" placeholder="" required>{{Auth::user()->profile->contact->adresse}}</textarea>
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
												<label for="">Ville (*)</label>
												<input type="text" name="ville_resident" placeholder="" required value="{{Auth::user()->profile->contact->ville_resident}}">
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
												<label for="">Code postal</label>
												<input type="text" name="code_postal" placeholder="" value="{{Auth::user()->profile->contact->code_postal}}">
											</div>
										</div>
										
										<div class="sec-title text-center">
											<h2>Informations Scolaires</h2>
										</div>
										<div class="row">
													<br>
													<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
													<label for=""></label> <br>
													<label class="container-radio">2ème année Bac {{date('Y')}}
											    	<input type="radio" name="bac_niveau" {{Auth::user()->profile->scolaire->bac_niveau=='actuel'?'checked':''}} value="actuel" required>
													<span class="checkmark"></span>
													</label>
													<label class="container-radio">Ancien BAC
													<input type="radio" name="bac_niveau" {{Auth::user()->profile->scolaire->bac_niveau=='aucien'?'checked':''}} value="aucien" required>
													<span class="checkmark"></span>
													</label>
													</div>
													<br>
													<div class="form-group col-lg-12 col-md-12 col-sm-12"> 
													<label for="">PACK</label> <br>
													<label class="container-radio">Pack Sciences Normal 
													<input type="radio" {{Auth::user()->profile->scolaire->pack=='sn'?'checked':''}} name="pack" value="sn" required>
													<span class="checkmark"></span>
													</label>
													<label class="container-radio">Pack Sciences Plus 
													<input type="radio" {{Auth::user()->profile->scolaire->pack=='sp'?'checked':''}} name="pack" value="sp" required>
													<span class="checkmark"></span>
													</label>
													<label class="container-radio">Pack Economie, Techniques et Lettres 
													<input type="radio" {{Auth::user()->profile->scolaire->pack=='etl'?'checked':''}} name="pack" value="etl" required>
													<span class="checkmark"></span>
													</label>
													<label class="container-radio">Pack Economie Plus
													<input type="radio" {{Auth::user()->profile->scolaire->pack=='ep'?'checked':''}} name="pack" value="ep" required>
													<span class="checkmark"></span>
													</label>
													</div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12">
														<label for="">Code MASSAR (*) (voir anciens bulletins de notes)</label>
														<input type="text" name="code_massar" placeholder="" value="{{Auth::user()->profile->scolaire->code_massar}}" required="">
													</div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
														<label for="">filière (*)</label>
														<select name="filier" id="" required>
															<option value="Sciences Economiques">Sciences Economiques</option><option value="Sciences de Gestion et de Comptabilité">Sciences de Gestion et de Comptabilité</option><option value="Sciences et Technologies Mécaniques">Sciences et Technologies Mécaniques</option><option value="Sciences et Technologies Electriques">Sciences et Technologies Electriques</option><option value="Lettres">Lettres</option><option value="Sciences Humaines">Sciences Humaines</option><option value="Sciences agronomiques">Sciences agronomiques</option><option value="Arts Appliqués">Arts Appliqués</option>
														</select>
													</div>
													<div class="form-group col-lg- col-md-12 col-sm-12">
													<label for="">Région (*)</label>
													<select name="region" required>
														@foreach($regions as $region)
														<option value="{{$region['region']}}"  {{Auth::user()->profile->scolaire->region==$region['region']?'selected':''}}>{{$region['region']}}</option>
														@endforeach
													</select>
													</div>
												</div>
													<div  class="row" id="AN" style="display: none">
													<div class="form-group col-lg-6 col-md-12 col-sm-12"  >
														<label for="" id="vilely"></label>
														<select name="ville" required>
															@foreach($villes as $ville)
															<option value="{{$ville['ville']}}"  {{Auth::user()->profile->scolaire->ville_etab_actuel==$ville['ville']?'selected':''}}>{{$ville['ville']}}</option>
															@endforeach
														</select>
													</div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12"  >
														<label for="" id="ly"></label>
														<input type="text" name="nom_etab" placeholder="" value="{{Auth::user()->profile->scolaire->nom_etab_actuel}}" required="">
													</div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12" ><label for="">
														Note Examen régional(*)</label>
														<input type="text" name="note_regional" value="{{Auth::user()->profile->scolaire->note_regional}}" required="">
													</div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12" id="morakaba">
														<label for="">Note du 1er semestre 2ème année baccalauréat (Si disponible)</label>
														<input type="text" name="Note_semestre" placeholder="" value="{{Auth::user()->profile->scolaire->Note_semestre}}">
													</div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12" >
														<label for="">Note Examen national</label>
														<input type="text" name="Examen_National" placeholder="" value="{{old('Examen_National')}}">
													</div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12" >
														<label for="">Note générale de bac</label>
														<input type="text" name="note_total" placeholder="" value="{{old('note_total')}}">
													</div>
												</div>
													<div class="form-group col-lg-12 col-md-12 col-sm-12 text"> <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Submit</span></button></div>
								</form>
												</div>
								

                                </div>
                            </div>
                        </div>

                    </div>
               
                </section>
        @endsection
