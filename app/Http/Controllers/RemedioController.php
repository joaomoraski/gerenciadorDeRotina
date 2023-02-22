<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRemedioRequest;
use App\Models\Remedio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RemedioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $remedios = Remedio::where('user_id', '=', auth()->id())->paginate(10);
//        dd($remedios->get(0)->user->name); funciona
        return view('remedio.index', ['remedios' => $remedios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('remedio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function store(CreateRemedioRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;
        $remedio = Remedio::create($validated);
        return redirect()->route('remedio.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Remedio $remedio
     */
    public function edit(Remedio $remedio)
    {
        if (auth()->user()->id != $remedio->user->id) {
            return back()->withErrors([
                'erro' => 'Você não possuí permissão de editar este remedio!',
            ]);
        }
        return view('remedio.edit', ['remedio' => $remedio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Remedio $remedio
     */
    public function update(CreateRemedioRequest $request, Remedio $remedio)
    {
        if (auth()->user()->id != $remedio->user->id) {
            return back()->withErrors([
                'erro' => 'Você não possuí permissão de editar este remedio!',
            ]);
        }
        $validated = $request->validated();
        $remedio->update($validated);
        return redirect()->route('remedio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Remedio $remedio
     */
    public function destroy(Remedio $remedio)
    {
        if (auth()->user()->id != $remedio->user->id) {
            return back()->withErrors([
                'erro' => 'Você não possuí permissão de excluir este remedio!',
            ]);
        }
        $remedio->delete();
        return redirect()->route("remedio.index");
    }
}
