<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAutorRequest;
use App\Http\Requests\UpdateAutorRequest;
use App\Models\Autor;

class AutorController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Autor::all();

        return response()->json($autores);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAutorRequest $request)
    {
        $data = $request->validated();

        $autor = Autor::create($data);

        return response()->json($autor);
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        return response()->json($autor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAutorRequest $request, Autor $autor)
    {
        $data = $request->validated();

        Autor::update($data);

        return response()->json($autor);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        Autor::delete();

        return response()->json();
    }
}
