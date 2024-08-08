<?php

namespace App\Http\Controllers;

use App\Livewire\Position\CreatePosition;
use App\Livewire\Position\EditPosition;
use App\Models\Position;
use App\Models\Sport;
use Illuminate\Http\Request;

class SportPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Sport $sport)
    {
        return view(
            'position.index',
            [
                'sport' => $sport->load('positions'),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Sport $sport)
    {
        return $this->renderLivewire(CreatePosition::class);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Sport $sport) {}

    /**
     * Display the specified resource.
     */
    public function show(Sport $sport, Position $position) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sport $sport, Position $position)
    {
        return $this->renderLivewire(EditPosition::class);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sport $sport, Position $position) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sport $sport, Position $position) {}
}
