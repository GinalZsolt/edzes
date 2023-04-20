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

    public function updatetraining(string $id){
        return view('update',["training"=>Edzes::find($id)]);
    }

    public function newtraining(){
        return view('newtraining');
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
        $uj=new Edzes;
        $uj->name = $request->name;
        $uj->duration = $request->duration;


        $uj->save();

        return redirect("/");

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
    public function update(Request $request,string $id)
    {
        $updateabel = Edzes::find($id);
        $updateabel->name = $request->name;
        $updateabel->duration = $request->duration;
        $updateabel->save();
        return redirect("/");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Edzes  $edzes
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        Edzes::destroy($id);
        return redirect('/');
    }
}
