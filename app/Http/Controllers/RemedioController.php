<?php

namespace App\Http\Controllers;

use App\Models\Remedio;
use Illuminate\Http\Request;
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
        $remedios = Remedio::all()->where('user_id', '=', auth()->id());
        dd($remedios->user->nome);
        return view('remedio.index', ['remedios' => $remedios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param Remedio $remedio
     */
    public function show(Remedio $remedio)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Remedio $remedio
     */
    public function edit(Remedio $remedio)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Remedio $remedio
     */
    public function update(Request $request, Remedio $remedio)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Remedio $remedio
     */
    public function destroy(Remedio $remedio)
    {
    }
}
