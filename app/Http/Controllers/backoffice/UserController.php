<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function __construct() {
        
            $this->middleware('auth:admin');
    }

    public function index() {
        
        $users = User::all();
        return view('backoffice.user.index',[
            'users' => $users
        ]);

    }
    public function update(Request $request, $id) {

        $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'psw' => 'nullable|min:8',
            'npsw' => 'same:psw'
        ]);
        if($request->psw) {
            User::find($id)->update(['password'=> Hash::make($request->psw)]);
        }
        User::find($id)
        ->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->back()->with(
            'success', 'Authentification bien Modifier');

    }
    public function store(Request $request, $id) {

        $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'psw' => 'required|min:8',
            'npsw' => 'required|same:psw'
        ]);
        $user_id = User::Create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->npsw)
        ]);

        Profile::find($id)->update([
            'user_id' => $user_id->id
        ]);
        return redirect()->back()->with(
            'success', 'Authentification Bien Enregistrer'
        );

    }
    public function delete($id) {
        $users = User::find($id)->delete();
        return redirect()->back()->with(
            'success', 'Authentification Supprimer'
        );

    }
}
