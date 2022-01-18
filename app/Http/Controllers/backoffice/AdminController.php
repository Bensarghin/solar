<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index() {

        return view('backoffice.auth.login');
        
    }

    public function login(Request $request) {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->route('admin.home');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function auth() {
        $admin  = Admin::first();
        return view('backoffice.auth.auth',[
            'admin' => $admin
        ]);
    }

    public function update(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'psw' => 'nullable|min:8',
            'npsw' => 'same:psw'
        ]);

        if($request->psw) {
            Admin::first()->update(['password'=> Hash::make($request->psw)]);
        }

        Admin::first()
        ->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->back()->with(
            'success', 'Authentification bien Modifier');
    }
}
