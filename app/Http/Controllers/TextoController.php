<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEditTextoRequest;
use App\Models\Texto;
use Faker\Provider\Text;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TextoController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $textos = Texto::where('user_id', '=', auth()->user()->id)->paginate(10);
        return view('texto.index', ['textos' => $textos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('texto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(CreateEditTextoRequest $request)
    {
        $validated = $request->safe()->only('content');
        $validated['user_id'] = auth()->user()->id;
        $texto = Texto::create($validated);
        return redirect()->route('texto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Application|Factory|View
     */
    public function show(Texto $texto)
    {
        return view('texto.show', compact('texto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Texto $texto
     * @return Application|Factory|View
     */
    public function edit(Texto $texto)
    {
        // TODO: nao poder ver o de outro usuário
        return view('texto.edit', ['texto' => $texto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Texto $texto
     * @return Application|Factory|View|RedirectResponse
     */
    public function update(CreateEditTextoRequest $request, Texto $texto)
    {
        if ($texto->user_id == auth()->user()->id){
            $validated = $request->safe()->only('content');
            $texto->update($validated);
            return redirect()->route('texto.index');
        }
        return view('texto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Texto $texto
     * @return Application|Factory|View|RedirectResponse
     */
    public function destroy(Texto $texto)
    {
        if ($texto->user_id == auth()->user()->id){
            $texto->delete($texto);
            return redirect()->route('texto.index');
        }
        return view('texto.index');
    }
}
