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
    public function index(): Responsable|Response
    {
        return view(
            'person.index',
            [
                'persons' => Person::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Responsable|Response
    {
        return view(
            'person.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request): Responsable|Response
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person): Responsable|Response
    {
        return view(
            'person.show',
            [
                'person' => $person
            ]
        )
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person): Responsable|Response
    {
        return view(
            'person.edit',
            [
                'person' => $person
            ]
        )
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonRequest $request, Person $person): Responsable|Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person): Responsable|Response
    {
        //
    }
}
