<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Etudiant;
use App\Models\Contact;
use App\Models\Scolaire;
use App\Models\Profile;

class EtudiantsController extends Controller
{
    public function __construct() {
        
		$this->middleware('auth:admin');
	}

    public function index()
    {
        $profiles = Profile::all();
        return view('backoffice.etudiant.index',[
            'profiles' => $profiles
        ]); 
    }

    public function show($id)
    {
        $profile = Profile::find($id);
        if($profile){
            return view('backoffice.etudiant.show',[
                'profile' => $profile
            ]);
        }
        else {
            return abort('404');
        }
    }

    public function edit($id)
    {
        $profile = Profile::find($id);
        if($profile){
            return view('backoffice.etudiant.edit',[
                'profile' => $profile
            ]);
        }
        else {
            return abort('404');
        }
    }

    // update etudiant
    public function update(Request $request, $id) {

        $etudiant = Etudiant::find($id);
        if(!$etudiant) {
            return abort('404');
        }
        $request->validate([
            'image' => ['nullable','mimes:jpg,png,jpeg,gif,svg','max:2024'],
            //etudiant validate
            'cin' => 'nullable',
            'nom' => 'required',
            'prenom' => 'required',
            'nom_ar' => 'required',
            'prenom_ar' => 'required',
            'date_nais' => 'date|required',
            'lieu_nais' => 'required',
            'gender' => 'required'
        ]);        
        $image = $request->file('image');
        if($image!=null) {
            //delete image if exists
            if(File::exists(public_path('uploads/').$etudiant->image)) {
                File::delete(public_path('uploads/').$etudiant->image);
            }
            // upload new image
            $extension = $image->getClientOriginalExtension();
            $fileName = time().'.'.$extension; 
            $image->move(public_path('uploads'), $fileName);
            Etudiant::whereId($id)->update(['image'=>$fileName]);
        }
        Etudiant::whereId($id)
        ->update([
            'cin' => $request->cin,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'nom_ar' => $request->nom_ar,
            'prenom_ar' => $request->prenom_ar,
            'date_nais' => $request->date_nais,
            'lieu_nais' => $request->lieu_nais,
            'gender' => $request->gender,
        ]);
        return redirect()->route('etudiant.profile',['id'=>$etudiant->profile->id]);
    }

    // update contact
    public function contact(Request $request, $id) {
        $contact = Contact::find($id);
        if(!$contact) {
            return abort('404');
        }
        $request->validate([
            'tele' => ['required','numeric','digits:10'],
            'adresse' => 'required',
            'ville_resident' => 'required',
            'tele_fixe' => ['nullable','numeric','digits:10'],
            'whatsapp' => ['nullable','numeric','digits:10'],
            'tele_parent' => ['nullable','numeric','digits:10'],
            'code_postal' => ['nullable','numeric','digits:5']
            ]);
        Contact::where('id',$id)
        ->update([
            'tele' => $request->tele,
            'whatsapp' => $request->whatsapp,
            'tele_parent' => $request->tele_parent,
            'tele_fixe' => $request->tele_fixe,
            'adresse' => $request->adresse,
            'ville_resident' => $request->ville_resident,
            'code_postal' => $request->code_postal
        ]);
        return redirect()->route('etudiant.profile',['id' => $contact->profile->id]);
    }

    // update scolaire
    public function scolaire(Request $request, $id) {
        $scolaire = Scolaire::find($id);
        if(!$scolaire) {
            return abort('404');
        }
        $request->validate([
            'pack'=> 'required',
            'bac_niveau' => 'required',
            'code_massar' => 'required' ,
            'filier' => 'required' ,
            'region' => 'required' ,
            'note_total' => 'nullable|numeric|max:20',
            'note_regional' => 'required|numeric|max:20' ,
            'Note_semestre' => 'nullable|numeric|max:20',
            'Examen_National' => 'nullable|numeric|max:20' ,
            'ville' => 'required' ,
            'nom_etab' => 'required' ,
        ]);

        Scolaire::where('id', $id)
        ->update([
            'pack'=> $request->pack,
            'bac_niveau' => $request->bac_niveau ,
            'code_massar' => $request->code_massar ,
            'filier' => $request->filier ,
            'region' => $request->region ,
            'note_total' => $request->note_total ,
            'note_regional' => $request->note_regional ,
            'Examen_National' => $request->Examen_National ,
            'Note_semestre' => $request->Note_semestre ,
            'nom_etab_actuel' => $request->nom_etab ,
            'ville_etab_actuel' => $request->ville
        ]);

        return redirect()->route('etudiant.profile',['id' => $scolaire->profile->id]);
    }

    public function create() {

        return view('backoffice.etudiant.add');
    }

    public function store(Request $request) {

        $request->validate([
            'image' => ['nullable','mimes:jpg,png,jpeg,gif,svg','max:2024'],
            //etudiant validate
            'cin' => 'nullable|unique:etudiants',
            'nom' => 'required',
            'prenom' => 'required',
            'nom_ar' => 'required',
            'prenom_ar' => 'required',
            'date_nais' => 'date|required',
            'lieu_nais' => 'required',
            'gender' => 'required',
            // contact validate
            'tele' => ['required','numeric','digits:10'],
            'adresse' => 'required',
            'ville_resident' => 'required',
            'tele_fixe' => ['nullable','numeric','digits:10'],
            'whatsapp' => ['nullable','numeric','digits:10'],
            'tele_parent' => ['nullable','numeric','digits:10'],
            'code_postal' => ['nullable','numeric','digits:5'],
            // scolaire validate
            'pack'=> 'required',
            'bac_niveau' => 'required' ,
            'code_massar' => 'required' ,
            'filier' => 'required' ,
            'nom_etab' => 'required',
            'ville' => 'required',
            'note_regional'=>   'required|numeric|max:20',
            'note_total' => 'nullable|numeric|max:20',
            'Note_semestre'=>   'nullable|numeric|max:20',
            'Examen_National' => 'nullable|numeric|max:20',
            'region' => 'required' ,


        ]);

        $fileName = null;
        $image = $request->file('image');
        if($image!=null) {

            $extension = $image->getClientOriginalExtension();
            $fileName = time().'.'.$extension; 
            $image->move(public_path('uploads'), $fileName);
        }

        $etud = Etudiant::create([
            'image' => $fileName,
            'cin' => $request->cin,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'nom_ar' => $request->nom_ar,
            'prenom_ar' => $request->prenom_ar,
            'date_nais' => $request->date_nais,
            'lieu_nais' => $request->lieu_nais,
            'gender' => $request->gender,
        ]);

        $contact = Contact::create([
            'tele' => $request->tele,
            'whatsapp' => $request->whatsapp,
            'tele_parent' => $request->tele_parent,
            'tele_fixe' => $request->tele_fixe,
            'adresse' => $request->adresse,
            'ville_resident' => $request->ville_resident,
            'code_postal' => $request->code_postal
        ]);

        $scol = Scolaire::create([
            'pack'=> $request->pack,
            'bac_niveau' => $request->bac_niveau ,
            'nom_etab_actuel' => $request->nom_etab ,
            'code_massar' => $request->code_massar ,
            'filier' => $request->filier ,
            'note_regional' => $request->note_regional ,
            'note_total' => $request->note_total ,
            'ville_etab_actuel' => $request->ville ,
            'Note_semestre'=>   $request->Note_semestre,
            'Examen_National' => $request->Examen_National,
            'region' => $request->region 
        ]);

        Profile::create([
            'etudiant_id' => $etud->id,
            'contact_id' => $contact->id,
            'scolaire_id' => $scol->id,
        ]);

        return redirect()->route('etudiants')->with(
            'success', 'votre enregistrement a été bien éffectuer'
        );
    }

    public function destroy($id) {
        
        $etudiant = Etudiant::find($id);
        if(!$etudiant) {
            return abort('404');
        }

        //delete image if exists
        if(File::exists(public_path('uploads/').$etudiant->image)) {
            File::delete(public_path('uploads/').$etudiant->image);
        }
        $etudiant->profile->contact->delete();
        $etudiant->profile->scolaire->delete();
        $etudiant->delete();
        return redirect()->route('etudiants');
    }

    public function payer($id) {
        $etudiant = Etudiant::find($id);
        $payer = Etudiant::find($id)->payer;
        if(!$etudiant) {
            return abort('404');
        }
        $etudiant->update([
            'payer' => !$payer
        ]);

        return redirect()->back();
    }
}
