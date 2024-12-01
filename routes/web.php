<?php

use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\StudySessionController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TopicController;
use App\Models\StudySession;

Route::middleware('guest')->group(function() {
    Route::get('register', [RegisteredUserController::class, 'create']);
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [SessionController::class, 'create'])->name('login');
    Route::post('login', [SessionController::class, 'store']);
});

Route::middleware('auth')->group(function() {

    Route::get('/', function () {
        return view('welcome');
    });

    //Subjects
    Route::get('subjects', [SubjectController::class, 'index']);
    Route::get('subjects/create', [SubjectController::class, 'create']);
    Route::post('subjects/create', [SubjectController::class, 'store']);
    Route::get('subjects/{subject}', [SubjectController::class, 'show'])->can('view', 'subject');
    Route::get('subjects/{subject}/edit', [SubjectController::class, 'edit'])->can('update', 'subject');
    Route::patch('subjects/{subject}', [SubjectController::class, 'update'])->can('update', 'subject');

    //Topics
    Route::get('topics', [TopicController::class, 'index']);
    Route::get('topics/create', [TopicController::class, 'create']);
    Route::post('topics/create', [TopicController::class, 'store']);
    Route::get('topics/{topic}', [TopicController::class, 'show'])->can('view', 'topic');
    Route::get('topics/{topic}/edit', [TopicController::class, 'edit'])->can('update', 'topic');
    Route::patch('topics/{topic}', [TopicController::class, 'update'])->can('update', 'topic');

    //Cards
    Route::get('cards', [CardController::class, 'index']);
    Route::get('cards/create', [CardController::class, 'create']);
    Route::post('cards/create', [CardController::class, 'store']);
    Route::get('cards/{card}', [CardController::class, 'show'])->can('view', 'card');
    Route::get('cards/{card}/edit', [CardController::class, 'edit'])->can('update', 'card');
    Route::patch('cards/{card}', [CardController::class, 'update'])->can('update', 'card');

    //Study Session
    Route::get('study_session/create', [StudySessionController::class, 'store']);

    Route::delete('logout', [SessionController::class, 'destroy']);
});

