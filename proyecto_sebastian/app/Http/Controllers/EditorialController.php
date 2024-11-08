<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEditorialRequest;
use App\Http\Requests\UpdateEditorialRequest;
use App\Models\Editorial;

class EditorialController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Editorial::all();

        return response()->json($autores);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEditorialRequest $request)
    {
        $data = $request->validated();

        $autor = Editorial::create($data);

        return response()->json($autor);
    }

    /**
     * Display the specified resource.
     */
    public function show(Editorial $autor)
    {
        return response()->json($autor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEditorialRequest $request, Editorial $autor)
    {
        $data = $request->validated();

        Editorial::update($data);

        return response()->json($autor);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editorial $autor)
    {
        Editorial::delete();

        return response()->json();
    }
}
