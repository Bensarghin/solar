<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subscribe;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email|unique:subscribes'
        ]);
        Subscribe::create([
            'email' => $request->email
        ]);

        return redirect()->back()->with('success','Votre Abonneé à été bien enregistrer');
    }
}
