<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use App\Http\Requests\UpdateSubscribeRequest;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub  = Subscribe::all();
        return view('backoffice.subscribe.index',[
            'subscribes' => $sub
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show(Subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscribe $subscribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubscribeRequest  $request
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubscribeRequest $request, Subscribe $subscribe)
    {
        //
    }

    public function destroy($id)
    {
        $sub = Subscribe::find($id);
        if(!$sub) {
            return abort('404');
        }
        $sub->delete();
        return redirect()->back()->with('success','email supprimer');
    }

    public function export() {
        return Excel::download(new UsersExport, 'subscribers.xlsx');
    }
}
