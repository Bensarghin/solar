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
                            <div class="contact-form">
                                <form >
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
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"><label for="">Nom (*)</label><input type="text" name="nom" placeholder="" required=""></div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> <label for="">Prénom (*)</label><input type="text" name="prenom" placeholder="" required=""></div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> <label for="">Nom en arabe (*)</label><input type="text" dir="RTL" name="noma" placeholder=""></div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"><label for="">Prénom en arabe (*)</label> <input type="email" dir="RTL" name="prenoma" placeholder="" required=""></div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">  <label for="">Date de naissance (*)</label><input type="date" name="daten" id="date" placeholder="" required=""></div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">  <label for="">Lieu de naissance (*)</label>
										<select name="">
												<option value="1">CASABLANCA</option>
												<option value="2">MARRAKECH</option>
												<option value="3">AGADIR</option>
												<option value="5">RABAT</option>
												<option value="6">SAFI</option>
												<option value="7">YOUSSOUFIA</option>
												<option value="8">ESSAOUIRA</option>
												<option value="9">SETTAT</option>
												<option value="10">AIT OURIR</option>
												<option value="11">AMIZMIZ</option>
												<option value="12">AFOURAR</option>
												<option value="13">AIN BNI MATHAR</option>
												<option value="14">AIN TAOUJDATE</option>
												<option value="15">AIT ISHAQ-KHENIFRA</option>
												<option value="17">AOULOUZ</option>
												<option value="19">ASNI</option>
												<option value="20">ASSILAH</option>
												<option value="21">AZEMMOUR</option>
												<option value="22">AZILAL</option>
												<option value="23">AZROU</option>
												<option value="25">BEJAAD</option>
												<option value="26">BEN AHMED</option>
												<option value="27">BEN SLIMANE</option>
												<option value="28">BENGUERIR</option>
												<option value="29">BENI ENSSAR- NADOR</option>
												<option value="30">BENI MELLAL</option>
												<option value="31">BERKANE</option>
												<option value="32">BERRECHID</option>
												<option value="33">BIR JDID-EL JADIDA</option>
												<option value="34">BOUARFA</option>
												<option value="35">BOUCHANE</option>
												<option value="36">BOUJAAD</option>
												<option value="37">BOUJDOUR</option>
												<option value="38">BOUJNIBA KHOURIBGA</option>
												<option value="39">BOULEMANE FES</option>
												<option value="40">BOUMALNE DADES</option>
												<option value="41">BOUZNIKA</option>
												<option value="42">BZOU</option>
												<option value="43">CHEFCHAOUEN</option>
												<option value="44">CHICHAOUA</option>
												<option value="45">CHTOUKA AIT BAHA</option>
												<option value="46">DAKHLA</option>
												<option value="47">DCHEIRA-INEZGANE</option>
												<option value="48">DEMNAT</option>
												<option value="49">DEROUA</option>
												<option value="50">DOUIRANE</option>
												<option value="52">ECHEMMAIA</option>
												<option value="54">EL  HANCHANE-ESSAOUIRA</option>
												<option value="55">EL ATTAOUIA</option>
												<option value="56">EL BOROUJ - SETTAT</option>
												<option value="57">EL GARA BERRECHID</option>
												<option value="58">EL HAJEB</option>
												<option value="59">EL HOCEIMA</option>
												<option value="60">EL JADIDA</option>
												<option value="61">EL KELAA DES SRAGHNA</option>
												<option value="62">EL KSIBA - BENI MELLAL</option>
												<option value="63">EL OUALIDIA</option>
												<option value="64">ERRACHIDIA</option>
												<option value="65">ER-RICH</option>
												<option value="66">ES-SMARA</option>
												<option value="67">FES</option>
												<option value="68">FKIH BEN SALAH</option>
												<option value="69">GHMATE</option>
												<option value="70">GOULMIMA</option>
												<option value="71">GUELMIM</option>
												<option value="72">GUERCIF</option>
												<option value="73">IFRANE</option>
												<option value="74">IMINTANOUTE</option>
												<option value="75">IMOUZZER KANDAR</option>
												<option value="76">INEZGANE</option>
												<option value="77">JEMAAT SHAIM-SAFI</option>
												<option value="78">KASBAT TADLA</option>
												<option value="79">KELAA MGOUNA -ma</option>
												<option value="80">KENITRA</option>
												<option value="81">KHEMISSET</option>
												<option value="82">KHENIFRA</option>
												<option value="84">KHOURIBGA</option>
												<option value="85">KSAR EL KEBIR</option>
												<option value="86">LAAYOUNE</option>
												<option value="87">LARACHE</option>
												<option value="88">LOUDAYA</option>
												<option value="89">MACHRAA BELKSSIRI</option>
												<option value="90">MEJJAT-CHICHAOUA</option>
												<option value="91">MEKNES</option>
												<option value="92">MIDELT</option>
												<option value="93">MISSOUR</option>
												<option value="94">MOHAMMEDIA</option>
												<option value="95">MOULAY ABDELLAH - EL JADIDA</option>
												<option value="96">MZOUDIA</option>
												<option value="97">NADOR</option>
												<option value="98">NOUACEUR</option>
												<option value="99">OUALIDIA</option>
												<option value="100">OUAOUIZEGHT</option>
												<option value="101">OUARZAZATE</option>
												<option value="102">OUAZZANE</option>
												<option value="103">OUED ZEM</option>
												<option value="104">OUJDA</option>
												<option value="105">OULAD AMRAN- YOUSSOUFIA</option>
												<option value="106">OULAD AYAD</option>
												<option value="107">OULAD BERHIL</option>
												<option value="110">OULED MBARAK-BENI MELLAL</option>
												<option value="111">OULED TEIMA</option>
												<option value="113">OUTAT EL HAJ</option>
												<option value="114">RHAMNA</option>
												<option value="115">SAIDIA</option>
												<option value="116">SALE</option>
												<option value="117">SALE AL JADIDA</option>
												<option value="118">SEBT GZOULA- SAFI</option>
												<option value="119">SEFROU</option>
												<option value="121">SIDI BENNOUR</option>
												<option value="122">SIDI BOUATHMANE</option>
												<option value="123">SIDI EL MOKHTAR</option>
												<option value="124">SIDI GHIATE</option>
												<option value="125">SIDI IFNI</option>
												<option value="126">SIDI ISMAIL</option>
												<option value="127">SIDI KACEM</option>
												<option value="128">SIDI MOKHTAR</option>
												<option value="129">SIDI RAHHAL</option>
												<option value="130">SIDI SLIMANE</option>
												<option value="131">SIDI SMAIL - EL JADIDA</option>
												<option value="132">SIDI YAHYA DU GHARB</option>
												<option value="133">SIDI ZOUINE-MARRAKECH</option>
												<option value="134">SKHIRATE-TEMARA</option>
												<option value="135">SKHOUR RHAMNA</option>
												<option value="136">SOUK EL ARBAA EL GHARB</option>
												<option value="137">TAHANAOUTE</option>
												<option value="138">TALMEST-ESSAOUIRA</option>
												<option value="139">TAMANAR</option>
												<option value="141">TAMELLALT</option>
												<option value="142">TAMESLOHTE</option>
												<option value="144">TAOUNAT</option>
												<option value="145">TAOURIRT</option>
												<option value="146">TAROUDANT</option>
												<option value="147">TATA</option>
												<option value="148">TAZA</option>
												<option value="149">TAZNAKHTE</option>
												<option value="150">TEMARA</option>
												<option value="151">TETOUAN</option>
												<option value="152">TIFELT</option>
												<option value="153">TIGHDOUINE</option>
												<option value="154">TINGHIR</option>
												<option value="155">TINJDADE</option>
												<option value="156">TIT MELLIL</option>
												<option value="157">TIZNIT</option>
												<option value="158">TOUAMA</option>
												<option value="159">ZAGORA</option>
												<option value="160">ZAIO-NADOR</option>
												<option value="161">ZAOUIAT CHEIKH</option>
												<option value="162">ZEMAMRA</option>
												<option value="166">ASSA ZAG </option>
												<option value="167">TAN TAN </option>
												<option value="169">OUED EDDAHAB</option>
												<option value="171">TANGER</option>
												<option value="172">AIT MELLOUL</option>
												<option value="173">SOAVE</option>
												<option value="174">TAMNSOURT</option>
												<option value="176">Busto Arsizio</option>
												<option value="177">TAOURIRT</option>
												<option value="180">OURIKA</option>
												<option value="181">TOUAMA</option>
												<option value="182">SOUK SEBT</option>
												<option value="183">DJEDDAH</option>
												<option value="184">KELAA MGOUNA -ma</option>
												<option value="185">BOUIZAKARNE</option>
												<option value="186">EL JANOUB</option>
												<option value="187">JERADA</option>
												<option value="188">FRANCE </option>
												<option value="189">ITALIE</option>
												<option value="191">M\'RIRT KHENIFRA</option>
												<option value="192">M\'RIRT KHENIFRA</option>
												<option value="193">M\'RIRT KHENIFRA</option>
												<option value="195">FIGUIG</option>
												<option value="196">SIDI BERNOUSSI</option>
												<option value="197">M\'DIK</option>
												<option value="198">AL HIKMA</option>
												<option value="199">FRANCE</option>
												<option value="200">FRANCE - BORDEAU</option>
												<option value="201">MEKKA</option>
												<option value="202">ALLEMAGNE  </option>
												<option value="203">ESPAGNE</option>
												<option value="204">ESPAGNE</option>
												<option value="206">ARABIE SAOUDITE</option>
												<option value="207">DJEDDAH ARABIE SAOUDITE</option>
												<option value="208">AL MAARIFA</option>
												<option value="209">OMAN</option>
												<option value="210">BOSTON USA</option>
												<option value="211">TALIOUINE</option>
												<option value="212">FRANCFORT</option>
												<option value="213">SEBT EL GUERDANE - TAROUDANT </option>
												<option value="214">OULAD MTAA</option>
												<option value="215">DUSSELDORF ALLEMAGNE</option>
												<option value="216">ZAGORA -ma</option>
												<option value="218">CHOUITER</option>
												<option value="219">BELGIQUE</option>
												<option value="220">BELGIQUE</option>
												<option value="221">AZZOUZIA</option>
												<option value="222">TAFETTACHT</option>
												<option value="223">USA</option>
												<option value="224">JORDANIE</option>
												<option value="225">MADYOUNA</option>
												<option value="226">Monreal</option>
												<option value="228">Mauritanie</option>
												<option value="229">Danemark</option>
												<option value="230">SALTANAT OMAN</option>
												<option value="231">LIBYE</option>
												<option value="233">DECHEIRA EL JIHADIYA</option>
												<option value="234">TARFAYA</option>
												<option value="235">TAMESNA</option>
												<option value="236">TAMESNA</option>
												<option value="237">TAMESNA</option>
												<option value="238">TAMESNA</option>
												<option value="239">Sidi-Bibi</option>
												<option value="240">RAS EL AIN</option>
												<option value="241">RAS EL AINE</option>
												<option value="242">HAD RAS EL AINE</option>
												<option value="243">taourirt</option>
												<option value="244">TAOURIRT</option>
												<option value="245">SIDI GHANEM</option>
												<option value="246">MARTIL</option>
												<option value="247">ERRACHIDIA - suivi par agadir </option>
												<option value="248">Abu Dhabi E.A.U</option>
												<option value="249">ZAGORA -ma</option>
												<option value="250">OULED AYYAD</option>
												<option value="251">Égypte</option>
												<option value="252">TASSELTANT</option>
												<option value="253">Algérie</option>
												<option value="254">BOUIZAKARNE - PROVINCE GUELMIM</option>
												<option value="255">TINGHIR -ma</option>
												<option value="256">ISTANBUL</option>
												<option value="257">BRADIA</option>
												<option value="258">ERRACHIDIA- ma</option>
												<option value="259">Sénégal</option>
												<option value="260">PARIS</option>
												<option value="261">SIDI GHIATE</option>
												<option value="262">AIT AMIRA</option>
												<option value="263">MOHAMED BEN HASSAN EL OUAZANI</option>
												<option value="265">RUSSIE</option>
												<option value="266">ZEMRANE CHARQIA</option>
												<option value="267">BAHRAIN</option>
												<option value="268">LONDON</option>
												<option value="269">Djeddah</option>
												<option value="270">Aousserd</option>
												<option value="272">MIRLAFT</option>
												<option value="273">SIDI IFNI - MA</option>
												<option value="274">OUARZAZATE - ma</option>
												<option value="275">LAS PALMAS</option>
												<option value="276">Riche</option>
												<option value="277">FOUM JEMAA</option>
												<option value="278">ouled yaich</option>
												<option value="279">Dakar</option>
												<option value="280">Mehdi benbarka</option>
												<option value="281">Mehdi benbarka</option>
												<option value="282">CANADA</option>
												<option value="283">Hollande</option>
												<option value="284">Outat El Haj</option>
												<option value="286">OULMES</option>
												<option value="287"> Préfecture d\'Inezgane-Aït Melloul</option>
												<option value="288">IRLANDE</option>
												<option value="289">OULAD TEIMA TAROUDANT</option>
												<option value="290">BEN AHMED SETTAT</option>
												<option value="291">AL ILMIYA</option>
												<option value="292">PORTUGAL</option>
												<option value="293">ZEMRANE</option>
												<option value="294">TINJEDAD-ma</option>
												<option value="295">ARFOUD</option>
												<option value="296">TAFRAOUT</option>
												<option value="297">TAFRAOUT</option>
												<option value="298">DAMAS-SYRIE</option>
												<option value="299">DAMAS-SYRIE</option>
												<option value="301">Tokyo</option>
										</select>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> <label for="">Cin</label><input type="text" name="" placeholder="" required=""></div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">  <label for="">Sexe</label> <br>
                                        <label class="container-radio">F
                                        <input type="radio" name="genre">
                                        <span class="checkmark"></span>
                                        </label>
                                        <label class="container-radio">M
                                        <input type="radio" name="genre">
                                        <span class="checkmark"></span>
                                        </label>
                                        </div>
										</div>
											<div class="sec-title text-center">
												<h2>Contact </h2>
											</div>
										<div class="row">
                                          <br>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"><label for="">Téléphone SMS (Pour recevoir des sms) (*)</label><input type="text" name="telephone" placeholder="" required=""></div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> <label for="">Code postal</label><input type="text" name="code_postal" placeholder="" required=""></div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> <label for="">Ville (*)</label><input type="text" name="ville" placeholder=""></div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"><label for="">Téléphone personnel</label> <input type="email" name="telephone_personnel" placeholder="" required=""></div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">  <label>Téléphone WhatsApp</label><input type="text" name="telephone_whatsapp" id="date" placeholder="" required=""></div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> <label for="">Téléphone des parents</label><input type="text" name="telephone_parent" placeholder="" required=""></div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> <label for="">Téléphone fixe</label><input type="text" name="telephone_fixe" placeholder="" required=""></div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12"> <label for="">Email</label><input type="text" name="email" placeholder="" required=""></div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12"><label for="">Adresse (*)</label><textarea name="adresse" placeholder=""></textarea></div>
										</div>
										
										<div class="sec-title text-center">
												<h2>Informations Scolaires</h2>
											</div>
													<div class="row">
													<br>
													<div class="form-group col-lg-6 col-md-12 col-sm-12"> 
													<label for=""></label> <br>
													<label class="container-radio">2ème année Bac 2022 
											    	<input type="radio" name="bac" value="1">
													<span class="checkmark"></span>
													</label>
													<label class="container-radio">Ancien BAC
													<input type="radio" name="bac" value="2">
													<span class="checkmark"></span>
													</label>
													</div>
													<br>
													<div class="form-group col-lg-12 col-md-12 col-sm-12"> 
													<label for="">PACK</label> <br>
													<label class="container-radio">Pack Sciences Normal 
													<input type="radio" name="pack">
													<span class="checkmark"></span>
													</label>
													<label class="container-radio">Pack Sciences Plus 
													<input type="radio" name="pack">
													<span class="checkmark"></span>
													</label>
													<label class="container-radio">Pack Economie, Techniques et Lettres 
													<input type="radio" name="pack">
													<span class="checkmark"></span>
													</label>
													<label class="container-radio">Pack Economie Plus
													<input type="radio" name="pack">
													<span class="checkmark"></span>
													</label>
													</div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12"><label for="">Code MASSAR (*) (voir anciens bulletins de notes)</label><input type="text" name="" placeholder="" required=""></div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12"> <label for="">filière (*)</label><select name="" id=""><option value="">Sciences Economiques</option><option value="">Sciences de Gestion et de Comptabilité</option><option value="">Sciences et Technologies Mécaniques</option><option value="">Sciences et Technologies Electriques</option><option value="">Lettres</option><option value="">Sciences Humaines</option><option value="">Sciences agronomiques</option><option value="">Arts Appliqués</option></select></div>
													<div class="form-group col-lg- col-md-12 col-sm-12">
													<label for="">Région (*)</label>
													<select>
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
													</div> </div>
													<div  class="row" id="AN" style="display: none">
													<div class="form-group col-lg-6 col-md-12 col-sm-12"  ><label for="" id="vilely"></label><input type="text" name="" placeholder="" required=""></div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12"  ><label for="" id="ly"></label><input type="text" name="" placeholder="" required=""></div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12" ><label for="">Note Examen régional(*)</label><input type="text" name="" placeholder="" required=""></div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12" id="morakaba"><label for="">Note du 1er semestre 2ème année baccalauréat (Si disponible)</label><input type="text" name="" placeholder="" required=""></div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12" ><label for="">Note Examen national</label><input type="text" name="" placeholder="" required=""></div>
													<div class="form-group col-lg-6 col-md-12 col-sm-12" ><label for="">Note générale de bac</label><input type="text" name="" placeholder="" required=""></div></div>
													<div class="form-group col-lg- col-md-12 col-sm-12">
													<label class="material-checkbox">
													<input type="checkbox">
													<span> J'ai lu et j'accepte les conditions générales d'abonnement <a href="">(Télécharger)</a></span>
													</label>
													</div>
													</div>
													<div class="form-group col-lg-12 col-md-12 col-sm-12 text"> <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Submit</span></button></div>
												</form>



                                </div>
                            </div>
                        </div>

                    </div>
               
                </section>
        @endsection
