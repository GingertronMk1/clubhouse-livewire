<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Livewire\Component;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Response;

abstract class Controller
{
    protected function renderLivewire(Component|string $component): Application|Response|ResponseFactory
    {
        if (is_string($component) && !class_exists($component)) {
            throw new \BadMethodCallException('Invalid class passed');
        }
        return App::call($component);
    }
}
