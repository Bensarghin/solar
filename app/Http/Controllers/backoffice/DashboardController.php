<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etudiant;

class DashboardController extends Controller
{
	public function __construct() {
		$this->middleware('auth:admin');
	}

    public function index()
    {
        $etudiants = Etudiant::all();
        return view('backoffice.dashboard.index', [
            'etudiants' => $etudiants
        ]);
    }
}
