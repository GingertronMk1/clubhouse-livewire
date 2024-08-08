<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSportRequest;
use App\Http\Requests\UpdateSportRequest;
use App\Livewire\Sport\CreateSport;
use App\Livewire\Sport\EditSport;
use App\Models\Sport;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Response;
use Illuminate\View\View;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
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
    public function create(): Application|Response|ResponseFactory
    {
        return $this->renderLivewire(CreateSport::class);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSportRequest $request): View {}

    /**
     * Display the specified resource.
     */
    public function show(Sport $sport): View
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
    public function edit(Sport $sport): Application|Response|ResponseFactory
    {
        return $this->renderLivewire(EditSport::class);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSportRequest $request, Sport $sport): View {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sport $sport): View {}
}
