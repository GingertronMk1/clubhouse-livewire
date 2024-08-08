<?php

use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\SportPositionController;
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

/**
 * @var array<string, class-string> $resourceRoutes
 */
$resourceRoutes = [
    'competition' => CompetitionController::class,
    'game' => GameController::class,
    'person' => PersonController::class,
    'sport' => SportController::class,
    'sport.position' => SportPositionController::class,
    'team' => TeamController::class,
];

foreach ($resourceRoutes as $route => $controller) {
    Route::resource($route, $controller)->except(['store', 'update']);
}

require __DIR__.'/auth.php';
