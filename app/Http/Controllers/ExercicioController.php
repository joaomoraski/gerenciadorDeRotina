<?php

namespace App\Http\Controllers;

use App\Models\Exercicio;
use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exercicio.create');
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
     * @param  \App\Models\Exercicio  $exercicio
     * @return \Illuminate\Http\Response
     */
    public function show(Exercicio $exercicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exercicio  $exercicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Exercicio $exercicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exercicio  $exercicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exercicio $exercicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exercicio  $exercicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exercicio $exercicio)
    {
        //
    }
}
