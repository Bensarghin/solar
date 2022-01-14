<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Contact;
use App\Models\Scolaire;
use App\Models\Profile;

class EtudiantsController extends Controller
{
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
            'cin' => 'required|unique:etudiants',
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
        return redirect()->route('etudiant.profile',['']);
    }

    // update contact
    public function contact(Request $request, $id) {
        $request->validate([
            'tele' => ['required','numeric','digits:9'],
            'adresse' => 'required',
            'ville_resident' => 'required',
            'tele_fixe' => ['nullable','numeric','digits:9'],
            'whatsapp' => ['nullable','numeric','digits:9'],
            'tele_parent' => ['nullable','numeric','digits:9'],
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
        return redirect()->route('etudiant.profile',['id' => Contact::find($id)->profile->id]);
    }

    // update scolaire
    public function scolaire(Request $request, $id) {
        $request->validate([
            'pack'=> 'required',
            'bac_niveau' => 'numeric|required|digits:4',
            'code_massar' => 'required' ,
            'filier' => 'required' ,
            'region' => 'required' ,
        ]);

        Scolaire::where('id',$id)
        ->update([
            'pack'=> $request->pack,
            'bac_niveau' => $request->bac_niveau ,
            'code_massar' => $request->code_massar ,
            'filier' => $request->filier ,
            'region' => $request->region 
        ]);
        return redirect()->route('etudiant.profile',['id' => Scolaire::find($id)->profile->id]);
    }

    public function create() {
        return view('backoffice.etudiant.add');
    }

    public function store(Request $request) {

        $request->validate([
            'image' => ['nullable','mimes:jpg,png,jpeg,gif,svg','max:2024'],
            //etudiant validate
            'cin' => 'required|unique:etudiants',
            'nom' => 'required',
            'prenom' => 'required',
            'nom_ar' => 'required',
            'prenom_ar' => 'required',
            'date_nais' => 'date|required',
            'lieu_nais' => 'required',
            'gender' => 'required',
            // contact validate
            'tele' => ['required','numeric','digits:9'],
            'adresse' => 'required',
            'ville_resident' => 'required',
            'tele_fixe' => ['nullable','numeric','digits:9'],
            'whatsapp' => ['nullable','numeric','digits:9'],
            'tele_parent' => ['nullable','numeric','digits:9'],
            'code_postal' => ['nullable','numeric','digits:5'],
            // scolaire validate
            'pack'=> 'required',
            'bac_niveau' => 'required' ,
            'code_massar' => 'required' ,
            'filier' => 'required' ,
            'nom_etab' => 'required',
            'ville' => 'required',
            'note_regional'=>   'required',
            'note_total' => 'required',
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
            'region' => $request->region 
        ]);

        Profile::create([
            'etudiant_id' => $etud->id,
            'contact_id' => $contact->id,
            'scolaire_id' => $scol->id,
        ]);

        return redirect()->route('etudiants',[
            'success', 'votre enregistrement a été bien éffectuer'
        ]);
    }

    public function destroy($id) {
        $etudiant = Etudiant::find($id);
        $etudiant->profile->contact->delete();
        $etudiant->profile->scolaire->delete();
        $etudiant->delete();
        return redirect()->route('etudiants');
    }
}
