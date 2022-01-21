<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Subscribe;
use App\Models\User;
use App\Models\Profile;
use App\Models\Scolaire;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
	public function __construct() {
        
		$this->middleware('auth:admin');
	}

    public function index()
    {
        $user_ids = Profile::whereNotNull('user_id');
        $profiles = Profile::all();
        
        $Subscribe = Subscribe::all();
        $users = User::whereNotIn('id',$user_ids->get('user_id'))->get();
        $etudiants = Etudiant::whereIn('id',$user_ids->get('etudiant_id'))->get();
        return view('backoffice.dashboard.index', [
            'etudiants' => $etudiants,
            'users' => $users,
            'profiles' => $profiles,
            
            'Subscribe' => $Subscribe,
        ]);
    }

    
    public function filtrer(Request $request) {

        if($request->all()) {

            $scolaire_id = Scolaire::
            where('bac_niveau',$request->bac_niveau)
            ->orWhere('pack',$request->pack)
            ->orWhere('filier',$request->filier)
            ->orWhere('region',$request->region)
            ->get('id');
            $prof_id = Profile::whereIn('scolaire_id',$scolaire_id)->get('etudiant_id');
            $user_ids = Profile::whereNotNull('user_id');
            $profiles = Profile::all();
            
        $Subscribe = Subscribe::all();
            $users = User::whereNotIn('id',$user_ids->get('user_id'))->get();
            $etudiants = Etudiant::whereIn('id',$prof_id)->get();
            return view('backoffice.dashboard.index', [
                'etudiants' => $etudiants,
                'users' => $users,
                'profiles' => $profiles,
            
                'Subscribe' => $Subscribe
            ]);
        }
        else {
            return redirect()->route('admin.home');
        }
    }
}
