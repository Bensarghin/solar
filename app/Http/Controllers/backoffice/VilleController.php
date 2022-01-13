<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    public function index() {
        $data = json_decode(file_get_contents(public_path() . "/js/villes.json"), true);
        return response()->json($data);
    }

    public function regions() {
        $data = json_decode(file_get_contents(public_path() . "/js/regions.json"), true);
        return response()->json($data);
    }
}
