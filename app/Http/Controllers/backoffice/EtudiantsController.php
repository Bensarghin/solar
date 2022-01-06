<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        return view('backoffice.etudiant.show',[
            'profile' => $profile
        ]);
    }

    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('backoffice.etudiant.edit',[
            'profile' => $profile
        ]);
    }
}
