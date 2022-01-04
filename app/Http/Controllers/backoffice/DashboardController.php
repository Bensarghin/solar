<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function __construct() {
		$this->middleware('auth:admin');
	}

    public function index()
    {
        return view('backoffice.dashboard.index');
    }
}
