<?php

use Illuminate\Support\Facades\Route;
use Analyzen\Candidate\Http\Controllers\CandidateController;

Route::group(
    [
        'middleware' => 'api',
        'prefix' => 'candidate',
    ],
    function () {
        Route::group(['middleware' => 'guest:api'], function () {
            Route::post('register', [CandidateController::class, 'register'])->name('candidate.registration');
        });
    }
);
