<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Auth::user()->subjects;
        return view('subjects.index', ['subjects' => $subjects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UpdateSubjectRequest $request)
    {

        $request->validate([
            'name' => ['required', 'min:3'],
        ]);

        Auth::user()->subjects()->create([
            'name' => request('name'),
        ]);

        // Subject::create([
        //     'name' => request('name'),
        //     'user_id' => Auth::id(),
        // ]);

        return redirect('/subjects/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        return view('subjects.show', ['subject' => $subject]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        return view('subjects.edit', ['subject' => $subject]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
        ]);

        $subject->name = $request['name'];
        $subject->update();

        return redirect('/subjects/'.$subject->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
