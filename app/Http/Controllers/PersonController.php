<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonRequest;
use App\Livewire\Person\CreatePerson;
use App\Livewire\Person\EditPerson;
use App\Models\Person;
use Illuminate\View\View;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Response;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        return view(
            'person.index',
            [
                'people' => Person::all(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Application|Response|ResponseFactory
    {
        return $this->renderLivewire(CreatePerson::class);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request): View {}

    /**
     * Display the specified resource.
     */
    public function show(Person $person): View
    {
        return view(
            'person.show',
            [
                'person' => $person,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person): Application|Response|ResponseFactory
    {
        return $this->renderLivewire(EditPerson::class);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person): View {}
}
