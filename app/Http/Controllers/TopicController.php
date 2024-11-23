<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topics = Topic::where('user_id', Auth::id())->latest()->paginate(15);
        return view('topics.index', ['topics' => $topics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::where('user_id', Auth::id())->orderBy('name', 'asc')->get();
        return view('topics.create', ['subjects' => $subjects]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTopicRequest $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'subject' => ['required', 'exists:subjects,id']
        ]);

        Topic::create([
            'name' => $request['name'],
            'subject_id' => $request['subject'],
            'user_id' => Auth::id(),
        ]);

        return redirect('/topics/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        return view('topics.show', ['topic' => $topic]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
        $subjects = Subject::where('user_id', Auth::id())->orderBy('name', 'asc')->get();
        return view('topics.edit', ['topic' => $topic, 'subjects' => $subjects]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTopicRequest $request, Topic $topic)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'subject' => ['required', 'exists:subjects,id']
        ]);

        $topic->name = $request['name'];
        $topic->subject_id = $request['subject'];
        $topic->update();

        return redirect('/topics/' . $topic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        //
    }
}
