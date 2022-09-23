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

        Route::group(['middleware' => 'auth:api'], function () {
            Route::get('profile', [CandidateController::class, 'profile'])->name('candidate.profile');
            Route::post('quiz', [CandidateController::class, 'quiz'])->name('candidate.quiz');
            Route::get('questions', [CandidateController::class, 'getQuestions'])->name('get.questions');
        });
    }
);
