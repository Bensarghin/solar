<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
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
            'npsw' => 'nullable|same:psw'
        ]);
        if($request->psw != null && $request->npw != null) {
            User::whereId($id)
            ->update([
                'password' =>  Hash::make($request->npsw)
            ]);
        }
        User::whereId($id)
        ->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->back();

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
            'success', 'Authentification Enregistrer'
        );

    }
    public function delete($id) {
        $users = User::find($id)->delete();
        return redirect()->back()->with(
            'success', 'Authentification Supprimer'
        );

    }
}
