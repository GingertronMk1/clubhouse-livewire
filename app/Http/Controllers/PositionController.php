<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePositionRequest;
use App\Http\Requests\UpdatePositionRequest;
use App\Models\Position;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Response;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Responsable|Response
    {
        return view(
            'position.index',
            [
                'positions' => Position::all(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Responsable|Response
    {
        return view(
            'position.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePositionRequest $request): Responsable|Response {}

    /**
     * Display the specified resource.
     */
    public function show(Position $position): Responsable|Response
    {
        return view(
            'position.show',
            [
                'position' => $position,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position): Responsable|Response
    {
        return view(
            'position.edit',
            [
                'position' => $position,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePositionRequest $request, Position $position): Responsable|Response {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position): Responsable|Response {}
}
