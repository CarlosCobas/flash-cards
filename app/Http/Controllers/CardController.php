<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Topic;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Auth::user()->cards;
        return view('cards.index', ['cards' => $cards]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $topics = Auth::user()->topics;
        return view('cards.create', ['topics' => $topics]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCardRequest $request)
    {

        $request->validate([
            'question' => ['required', 'min:3'],
            'answer' => ['required', 'min:3'],
            'topic' => ['required', 'exists:topics,id'],
        ]);

        $card = Auth::user()->cards()->create([
            'question' => request('question'),
            'answer' => request('answer'),
            'topic_id' => request('topic'),
        ]);

        $card->study_progress()->create();

        // Card::create([
        //     'question' => request('question'),
        //     'answer' => request('answer'),
        //     'topic_id' => request('topic'),
        //     'user_id' => Auth::id(),
        // ]);

        return redirect('/cards/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        return view('cards.show', ['card' => $card]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        $topics = Auth::user()->topics;
        return view('cards.edit', ['card' => $card, 'topics' => $topics]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCardRequest $request, Card $card)
    {
        $request->validate([
            'question' => ['required', 'min:3'],
            'answer' => ['required', 'min:3'],
            'topic' => ['required', 'exists:topics,id'],
        ]);

        $card->question = $request['question'];
        $card->answer = $request['answer'];
        $card->topic_id = $request['topic'];
        $card->update();

        return redirect('/cards/'.$card->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        //
    }
}
