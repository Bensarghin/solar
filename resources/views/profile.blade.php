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
     <section class="contact-page-section">
            <div class="auto-container">
                <div class="row">
                    <div class="form-column col-lg-12 col-md-12 col-sm-12">
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
								<div class="row">
                                    <br>
										<div class="form-group col-lg-12 col-md-12 col-sm-12"> 
											<label for="cin">Cin</label>
											<input type="text" name="cin" placeholder="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
											<label for="">Nom (*)</label>
											<input type="text" name="nom" placeholder="" required="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> 
											<label for="">Prénom (*)</label>
											<input type="text" name="prenom" placeholder="" required="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> 
											<label for="">Nom en arabe (*)</label>
											<input type="text" dir="RTL" name="nom_ar" placeholder="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
											<label for="">Prénom en arabe (*)</label> 
											<input type="text" dir="RTL" name="prenom_ar" placeholder="" required="">
										</div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">  
											<label for="">Date de naissance (*)</label>
											<input type="date" name="date_nais" id="date" placeholder="" required="">
										</div>
										<div class="form-group col-lg-6 col-md-12 col-sm-12">  
											<label for="">Lieu de naissance (*)</label>
											<input type="text" name="lieu_nais" id="date" placeholder="" required="">
										</div>
                                        
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">  
											<label for="">Sexe</label> <br>
                                        <label class="container-radio">Feminin
                                        <input type="radio" name="genre" value="F" required>
                                        <span class="checkmark"></span>
                                        </label>
                                        <label class="container-radio">Masculin
                                        <input type="radio" name="genre" value="M" required>
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
												<input type="text" name="tele" placeholder="" required="">
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12">  
												<label>Téléphone WhatsApp</label>
												<input type="text" name="whatsapp" id="date" placeholder="">
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
												<label for="">Téléphone des parents</label>
												<input type="text" name="tele_parent" placeholder="">
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
												<label for="">Téléphone fixe</label>
												<input type="text" name="tele_fixe" placeholder="">
											</div>
											<div class="form-group col-lg-12 col-md-12 col-sm-12">
												<label for="">Adresse (*)</label>
												<textarea name="adresse" placeholder="" required></textarea>
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
												<label for="">Ville (*)</label>
												<input type="text" name="ville_resident" placeholder="" required>
											</div>
											<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
												<label for="">Code postal</label>
												<input type="text" name="code_postal" placeholder="">
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
													<label class="container-radio">Ancien BAC
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
														<option value="1">Tanger-Tétouan-Al Hoceïma</option>
														<option value="2">L'Oriental</option>
														<option value="3">Fès-Meknès</option>
														<option value="4">Rabat-Salé-Kénitra</option>
														<option value="5">Béni Mellal-Khénifra</option>
														<option value="6">Casablanca-Settat</option>
														<option value="7">Marrakech-Safi</option>
														<option value="8">Drâa-Tafilalet</option>
														<option value="9">Souss-Massa</option>
														<option value="10">Guelmim-Oued Noun</option>
														<option value="11">Laâyoune-Sakia El Hamra</option>
														<option value="12">Dakhla-Oued Ed-Dahab</option>
													</select>
													</div>
												</div>
													<div  class="row" id="AN" style="display: none">
													<div class="form-group col-lg-6 col-md-12 col-sm-12"  >
														<label for="" id="vilely"></label>
														<input type="text" name="ville" placeholder="" required="">
													</div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12"  >
														<label for="" id="ly"></label>
														<input type="text" name="nom_etab" placeholder="" required="">
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

                    </div>
               
                </section>
        @endsection
