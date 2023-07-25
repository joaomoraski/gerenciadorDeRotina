<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{

    public function __construct()
    {
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
        return redirect()->route('atividade.geral')->with('sucesso', "Deu bom");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function geral()
    {
        $diaDaSemanaAtual = strval(getdate()['wday']);
        $quadrantes = [1, 2, 3, 4];

        $listaAtividades = array();

        foreach ($quadrantes as $quadrante) {
            $atividades = Atividade::where('user_id', '=', auth()->user()->id)
                ->where('quadrante', '=', $quadrante)
                ->where('diasDaSemana', 'like', "%$diaDaSemanaAtual%")
                ->where('excluidoEm', null)
                ->orderBy('isConcluido')
                ->orderBy('ordem')
                ->paginate(5);

            $listaAtividades["quadrante$quadrante"] = $atividades;
        }
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Atividade $atividade
     * @return \Illuminate\Http\Response
     */
    public function show(Atividade $atividade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Atividade $atividade
     * @return \Illuminate\Http\Response
     */
    public function edit(Atividade $atividade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Atividade $atividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atividade $atividade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Atividade $atividade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atividade $atividade)
    {
        if ($atividade->user_id == auth()->user()->id) {
            $atividade->excluidoEm = date('Y-m-d H:i:s');
            $atividade->update(['excluidoEm' => $atividade->excluidoEm]);
            return redirect()->route('atividade.geral')->with('exclusao', "apagou ai fiote");
        }
    }
}
