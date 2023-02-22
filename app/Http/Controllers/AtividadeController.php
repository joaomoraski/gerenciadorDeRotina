<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function alterarStatus(Atividade $atividade)
    {
        $atividade->isConcluido = !$atividade->isConcluido;
        $atividade->save();
        return redirect()->route('atividade.geral');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function geral()
    {
        $listaAtividades = array(
            'quadrante1' => Atividade::where('user_id', '=', auth()->user()->id)->where('quadrante', '=', 1)->orderBy('isConcluido')->orderBy('ordem')->paginate(5),
            'quadrante2' => Atividade::where('user_id', '=', auth()->user()->id)->where('quadrante', '=', 2)->orderBy('isConcluido')->orderBy('ordem')->paginate(5),
            'quadrante3' => Atividade::where('user_id', '=', auth()->user()->id)->where('quadrante', '=', 3)->orderBy('isConcluido')->orderBy('ordem')->paginate(5),
            'quadrante4' => Atividade::where('user_id', '=', auth()->user()->id)->where('quadrante', '=', 4)->orderBy('isConcluido')->orderBy('ordem')->paginate(5),
        );
        return view('atividade.geral', ['listaAtividades' => $listaAtividades]);
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function show(Atividade $atividade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function edit(Atividade $atividade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atividade $atividade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atividade $atividade)
    {
        //
    }
}
