<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;

Route::get('/', function () {
    return redirect()->route('trainings.index');
});

Route::resource('trainings', TrainingController::class);
