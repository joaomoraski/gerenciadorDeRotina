<?php

namespace App\Http\Controllers;

use App\Models\Ciclo;
use App\Models\Exercicio;
use App\Models\Semana;
use App\Models\Treino;
use Illuminate\Http\Request;

class GerenciaTreinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        , ['textos' => $textos]
        return view('gerenciaTreino.index');

    }

    public function configurar() {
        $ciclos = Ciclo::paginate(10);
        $semanas = Semana::paginate(10);
        $treinos = Treino::paginate(10);
        $exercicios = Exercicio::paginate(10);

        return view('gerenciaTreino.configurar', ['ciclos' => $ciclos, 'semanas' => $semanas, 'treinos' => $treinos, 'exercicios' => $exercicios]);
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
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function show(Treino $treino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function edit(Treino $treino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treino $treino)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treino $treino)
    {
        //
    }
}
