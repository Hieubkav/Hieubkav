<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\MainController;

    Route::get('/', [MainController::class, 'storeFront'])
        ->name('storeFront');

