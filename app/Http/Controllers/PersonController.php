<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use App\Models\Person;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Response;

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
    public function create(): \Illuminate\View\View
    {
        return view(
            'person.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request): \Illuminate\View\View {}

    /**
     * Display the specified resource.
     */
    public function show(Person $person): \Illuminate\View\View
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
    public function edit(Person $person): \Illuminate\View\View
    {
        return view(
            'person.edit',
            [
                'person' => $person,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonRequest $request, Person $person): \Illuminate\View\View {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person): \Illuminate\View\View {}
}
