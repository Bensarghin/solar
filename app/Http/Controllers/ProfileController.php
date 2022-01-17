<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Contact;
use App\Models\Etudiant;
use App\Models\Scolaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function __construct() {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Acc');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inscription');
    }

    public function store(Request $request)
    {
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
            'Examen_National'=>   'nullable|numeric|max:20',
            'Note_semestre' => 'nullable|numeric|max:20',
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
            'Examen_National' => $request->Examen_National ,
            'Note_semestre' => $request->Note_semestre ,
            'ville_etab_actuel' => $request->ville ,
            'region' => $request->region 
        ]);
        $user_id = Auth::id();
        Profile::create([
            'etudiant_id' => $etud->id,
            'contact_id' => $contact->id,
            'scolaire_id' => $scol->id,
            'user_id'   => $user_id
        ]);

        return redirect()->route('user.edit')->with(
            'success', 'votre enregistrement a été bien éffectuer'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if(Auth::user()->profile)
        return view('profile');
        else
        return redirect()->route('inscrip');
    }

    public function update(Request $request)
    {
        $request->validate([
            'image' => ['nullable','mimes:jpg,png,jpeg,gif,svg','max:2024'],
            //etudiant validate
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
            'Examen_National'=>   'nullable|numeric|max:20',
            'Note_semestre' => 'nullable|numeric|max:20',
            'region' => 'required' ,


        ]);
        $contact_id = Auth::user()->profile->contact->id;
        $scol_id = Auth::user()->profile->scolaire->id;
        $etudiant = Auth::user()->profile->etudiant;
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
            Etudiant::whereId($etudiant->id)->update(['image'=>$fileName]);
        }

         Etudiant::whereId($etudiant->id)
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

        Contact::whereId($contact_id)
        ->update([
            'tele' => $request->tele,
            'whatsapp' => $request->whatsapp,
            'tele_parent' => $request->tele_parent,
            'tele_fixe' => $request->tele_fixe,
            'adresse' => $request->adresse,
            'ville_resident' => $request->ville_resident,
            'code_postal' => $request->code_postal
        ]);

        Scolaire::whereId($scol_id)
        ->update([
            'pack'=> $request->pack,
            'bac_niveau' => $request->bac_niveau ,
            'nom_etab_actuel' => $request->nom_etab ,
            'code_massar' => $request->code_massar ,
            'filier' => $request->filier ,
            'note_regional' => $request->note_regional ,
            'note_total' => $request->note_total ,
            'Examen_National' => $request->Examen_National ,
            'Note_semestre' => $request->Note_semestre ,
            'ville_etab_actuel' => $request->ville ,
            'region' => $request->region 
        ]);

        return redirect()->back()->with(
            'success', 'votre enregistrement a été bien éffectuer'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
