<?php

namespace App\Http\Controllers;

use App\Models\Edzes;
use Illuminate\Http\Request;
class EdzesController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome',["trainings"=>Edzes::all()]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Edzes  $edzes
     * @return \Illuminate\Http\Response
     */
    public function show(Edzes $edzes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Edzes  $edzes
     * @return \Illuminate\Http\Response
     */
    public function edit(Edzes $edzes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Edzes  $edzes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Edzes $edzes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Edzes  $edzes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edzes $edzes)
    {
        //
    }
}
