<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSportRequest;
use App\Http\Requests\UpdateSportRequest;
use App\Models\Sport;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Response;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Responsable|Response
    {
        return view(
            'sport.index',
            [
                'sports' => Sport::all(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Responsable|Response
    {
        return view(
            'sport.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSportRequest $request): Responsable|Response {}

    /**
     * Display the specified resource.
     */
    public function show(Sport $sport): Responsable|Response
    {
        return view(
            'sport.show',
            [
                'sport' => $sport,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sport $sport): Responsable|Response
    {
        return view(
            'sport.edit',
            [
                'sport' => $sport,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSportRequest $request, Sport $sport): Responsable|Response {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sport $sport): Responsable|Response {}
}
