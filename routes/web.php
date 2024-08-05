<?php

use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard')
;

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile')
;

Route::resources([
    'competition' => CompetitionController::class,
    'game' => GameController::class,
    'person' => PersonController::class,
    'position' => PositionController::class,
    'sport' => SportController::class,
    'team' => TeamController::class,
]);

require __DIR__.'/auth.php';
