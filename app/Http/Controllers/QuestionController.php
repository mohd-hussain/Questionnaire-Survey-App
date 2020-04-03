<?php

namespace App\Http\Controllers;

use App\Question;
use App\Questionnair;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Questionnair $questionnair)
    {
        return view('Question.create',compact('questionnair'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Questionnair $questionnair , Request $request)
    {
            
        $data = request()->validate([
            'question.question' => 'required',
            'answers.*.answer' => 'required',
       ]); 

       $question = $questionnair->Questions()->create($data['question']);
       $question->answers()->createMany($data['answers']);

       return redirect('/questionnair/'.$questionnair->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionnair $questionnair,Question $question)
    {
         $question->answers()->delete();
         $question->delete();

         return redirect($questionnair->path());
        
    }
}
