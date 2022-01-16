@extends('layouts.master')
@section('content')
     <section class="contact-page-section">
            <div class="auto-container">
                <div class="row">
                    <div class="form-column col-lg-12 col-md-12 col-sm-12">
                		@if(Auth::user()->profile)
							<div class="alert alert-success text-center">
								<p>{{__('messages.inscrip')}}</p>| <a class="btn btn-link" href="{{route('user.edit')}}">{{__('messages.profile-redirect')}}</a>
								
							</div>
						@else
                        <div class="inner-column">
                            <div class="sec-title text-center">
							<h2>Créez votre profile</h2>
                            </div>
							@if($errors->count()>0)
								<div class="alert alert-danger">
									@foreach($errors->all() as $error)
									<li>{{$error}}</li>
									@endforeach
								</div>
							@endif
                            <div class="contact-form">
                                <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
									@csrf
								<center>
									<div class="form-input">
										<div class="preview">
										<img src="{{asset('assset/images/Avatar.png')}}" id="file-ip-1-preview">
										</div>
										<label for="file-ip-1"><i class="fa fa-upload"></i></label>
										<input type="file" id="file-ip-1" name="image" accept="image/*" onchange="showPreview(event);">
									</div>
								</center>
								<div class="row text-center">
                                    <br>
										<div class="form-group col-lg-12 col-md-12 col-sm-12"> 
											<label for="cin">Cin</label>
											<input type="text" value="{{old('cin')}}" name="cin" placeholder="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
											<label for="">Nom (*)</label>
											<input type="text" value="{{old('nom')}}" name="nom" placeholder="" required="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> 
											<label for="">Prénom (*)</label>
											<input type="text" value="{{old('prenom')}}" name="prenom" placeholder="" required="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> 
											<label for="">Nom en arabe (*)</label>
											<input type="text" value="{{old('nom_ar')}}" dir="RTL" name="nom_ar" placeholder="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
											<label for="">Prénom en arabe (*)</label> 
											<input type="text" value="{{old('prenom_ar')}}" dir="RTL" name="prenom_ar" placeholder="" required="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">  
											<label for="">Date de naissance (*)</label>
											<input type="date" name="date_nais" id="date" placeholder="" value="{{old('date_nais')}}" required="">
										</div>
										<div class="form-group col-lg-6 col-md-12 col-sm-12">  
											<label for="">Lieu de naissance (*)</label>
											<input type="text" value="{{old('lieu_nais')}}" name="lieu_nais" id="date" placeholder="" required="">
										</div>
                                        
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">  
											<label for="">Sexe</label> <br>
                                        <label class="container-radio">Feminin
                                        <input type="radio" name="gender" {{old('gender')=='F'?'checked':''}} value="F" required>
                                        <span class="checkmark"></span>
                                        </label>
                                        <label class="container-radio">Masculin
                                        <input type="radio" {{old('gender')=='M'?'checked':''}} name="gender" value="M" required>
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
												<input type="text" name="tele" placeholder="" required="" value="{{old('tele')}}" >
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12">  
												<label>Téléphone WhatsApp</label>
												<input type="text" value="{{old('whatsapp')}}" name="whatsapp" id="date" placeholder="">
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
												<label for="">Téléphone des parents</label>
												<input type="text" name="tele_parent" placeholder="" value="{{old('tele_parent')}}" >
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
												<label for="">Téléphone fixe</label>
												<input type="text" name="tele_fixe" placeholder="" value="{{old('tele_fixe')}}">
											</div>
											<div class="form-group col-lg-12 col-md-12 col-sm-12">
												<label for="">Adresse (*)</label>
												<textarea name="adresse" placeholder="" required>{{old('adresse')}}</textarea>
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
												<label for="">Ville (*)</label>
												<input type="text" name="ville_resident" placeholder="" required value="{{old('ville_resident')}}">
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
												<label for="">Code postal</label>
												<input type="text" name="code_postal" placeholder="" value="{{old('code_postal')}}">
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
											    	<input type="radio" name="bac_niveau" {{old('bac_niveau')=='actuel'?'checked':''}} value="actuel" required>
													<span class="checkmark"></span>
													</label>
													<label class="container-radio">Aucien Bac
													<input type="radio" name="bac_niveau" {{old('bac_niveau')=='aucien'?'checked':''}} value="aucien" required>
													<span class="checkmark"></span>
													</label>
													</div>
													<br>
													<div class="form-group col-lg-12 col-md-12 col-sm-12"> 
													<label for="">PACK</label> <br>
													<label class="container-radio">Pack Sciences Normal 
													<input type="radio" {{old('pack')=='sn'?'checked':''}} name="pack" value="sn" required>
													<span class="checkmark"></span>
													</label>
													<label class="container-radio">Pack Sciences Plus 
													<input type="radio" {{old('pack')=='sp'?'checked':''}} name="pack" value="sp" required>
													<span class="checkmark"></span>
													</label>
													<label class="container-radio">Pack Economie, Techniques et Lettres 
													<input type="radio" {{old('pack')=='etl'?'checked':''}} name="pack" value="etl" required>
													<span class="checkmark"></span>
													</label>
													<label class="container-radio">Pack Economie Plus
													<input type="radio" {{old('pack')=='ep'?'checked':''}} name="pack" value="ep" required>
													<span class="checkmark"></span>
													</label>
													</div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12">
														<label for="">Code MASSAR (*) (voir anciens bulletins de notes)</label>
														<input type="text" name="code_massar" placeholder="" value="{{old('code_massar')}}" required="">
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
														<option value="{{$region['region']}}" {{old('region')==$region['region']?'selected':''}}>{{$region['region']}}</option>
														@endforeach
													</select>
													</div>
												</div>
													<div  class="row" id="AN" style="display: none">
													<div class="form-group col-lg-6 col-md-12 col-sm-12"  >
														<label for="" id="vilely"></label>
														<select name="ville" required>
															@foreach($villes as $ville)
															<option value="{{$ville['ville']}}"  {{old('ville')==$ville['ville']?'selected':''}}>{{$ville['ville']}}</option>
															@endforeach
														</select>
													</div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12"  >
														<label for="" id="ly"></label>
														<input type="text" name="nom_etab" placeholder="" required="" value="{{old('ville')}}">
													</div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12" ><label for="">
														Note Examen régional(*)</label>
														<input type="text" name="note_regional" value="{{old('note_regional')}}" required="">
													</div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12" id="morakaba">
														<label for="">Note du 1er semestre 2ème année baccalauréat (Si disponible)</label>
														<input type="text" name="Note_semestre" placeholder="">
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
													<div class="form-group col-lg- col-md-12 col-sm-12">
													<label class="material-checkbox">
													<input type="checkbox">
													<span> J'ai lu et j'accepte les conditions générales d'abonnement <a href="">(Télécharger)</a></span>
													</label>
													</div>
													<div class="form-group col-lg-12 col-md-12 col-sm-12 text"> <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Submit</span></button></div>
								</form>
												</div>
								

                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
               
                </section>
        @endsection
