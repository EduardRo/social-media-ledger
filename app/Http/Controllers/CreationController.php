<?php

namespace App\Http\Controllers;

use App\Models\Creation;
use App\Http\Requests\StoreCreationRequest;
use App\Http\Requests\UpdateCreationRequest;
use Illuminate\Http\Request;

class CreationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $creations = Creation::all();
        return response()->json($creations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        StoreCreationRequest nu merge
        $creationData = $request->validated();

        $creation = Creation::create($creationData);

        return response()->json($creation, 201);
        */
        return Creation::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Creation $creation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Creation $creation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCreationRequest $request, Creation $creation)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Creation $creation)
    {
        //
    }
}
