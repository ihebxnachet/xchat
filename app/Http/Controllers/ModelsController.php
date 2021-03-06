<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
    $this->validate($request,[
        'nom'=>'required',
        'email'=>'required',
        'password'=>'required',
        'dtn'=>'required',
        'tel'=>'required',
    ]);
    $mdls = new Models;

    $mdls->nom=$request->input('nom');
    $mdls->email=$request->input('email');
    $mdls->password= \Hash::make($request->input('password'));
    $mdls->dtn=$request->input('dtn');
    $mdls->tel=$request->input('tel');

    $mdls->save();
    return redirect('/')->with('status', $mdls->nom);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
