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
        return redirect()->route('etudiant.profile',['']);
    }
    // update contact
    public function contact(Request $request, $id) {
        $request->validate([
            'tele' => 'required|numeric|min:9|max:9',
            'adresse' => 'required',
            'ville_resident' => 'required',
            'email' => 'email|required',
            'tele_fixe' => 'numeric|min:9|max:9',
            'whatsapp' => 'numeric|min:9|max:9',
            'tele_parent' => 'numeric|min:9|max:9',
            'code_postal' => 'numeric|max:5',
            ]);
        return redirect()->route('etudiant.profile',[]);
    }
    // update scolaire
    public function scolaire(Request $request, $id) {
        $request->validate([
            'pack'=> 'required',
            'bac_niveau' => 'numeric|required|min:4',
            'code_massar' => 'required' ,
            'filier' => 'required' ,
            'region' => 'required' ,
        ]);
        return redirect()->route('etudiant.profile',[]);
    }

    public function create() {
        return view('backoffice.etudiant.add');
    }

    public function store(Request $request) {

        $request->validate([
            //etudiant validate
            'cin' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'nom_ar' => 'required',
            'prenom_ar' => 'required',
            'date_nais' => 'date|required',
            'lieu_nais' => 'required',
            'gender' => 'required',
            // contact validate
            'tele' => 'required',
            'email' => 'required',
            'adresse' => 'required',
            'ville_resident' => 'required',
            'tele_fixe' => 'numeric|min:9|max:9',
            'whatsapp' => 'numeric|min:9|max:9',
            'tele_parent' => 'numeric|min:9|max:9',
            'code_postal' => 'numeric|max:5',
            // scolaire validate
            'pack'=> 'required',
            'bac_niveau' => 'required' ,
            'code_massar' => 'required' ,
            'filier' => 'required' ,
            'region' => 'required' ,


        ]);

        $etud = Etudiant::create([
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
            'email' => $request->email,
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
            'code_massar' => $request->code_massar ,
            'filier' => $request->filier ,
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
}
