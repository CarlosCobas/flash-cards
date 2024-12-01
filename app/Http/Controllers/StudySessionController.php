<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudySessionRequest;
use App\Http\Requests\UpdateStudySessionRequest;
use App\Models\StudyProgress;
use App\Models\StudySession;
use App\Services\StudySessionService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class StudySessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudySessionRequest $request)
    {
        StudySessionService::createStudySession(Auth::user());
    }

    /**
     * Display the specified resource.
     */
    public function show(StudySession $studySession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudySession $studySession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudySessionRequest $request, StudySession $studySession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudySession $studySession)
    {
        //
    }
}
