<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\User;
use App\Models\Profile;
use App\Models\Scolaire;

class DashboardController extends Controller
{
	public function __construct() {
		$this->middleware('auth:admin');
	}

    public function index()
    {
        $user_ids = Profile::whereNotNull('user_id');
        $profiles = Profile::all();
        $users = User::whereNotIn('id',$user_ids->get('user_id'))->get();
        $etudiants = Etudiant::whereIn('id',$user_ids->get('etudiant_id'))->get();
        return view('backoffice.dashboard.index', [
            'etudiants' => $etudiants,
            'users' => $users,
            'profiles' => $profiles
        ]);
    }

    
    public function filtrer(Request $request) {

        if($request->all()->count() > 0) {

            $scolaire_id = Scolaire::where('bac_niveau',$request->bac_niveau)->get('id');
            $prof_id = Profile::whereIn('scolaire_id',$scolaire_id)->get('etudiant_id');
            $user_ids = Profile::whereNotNull('user_id');
            $profiles = Profile::all();
            $users = User::whereNotIn('id',$user_ids->get('user_id'))->get();
            $etudiants = Etudiant::whereIn('id',$prof_id)->get();
            return view('backoffice.dashboard.index', [
                'etudiants' => $etudiants,
                'users' => $users,
                'profiles' => $profiles
            ]);
        }
        else {
            return redirect()->back();
        }
    }
}
