<?php

namespace App\Http\Controllers;

use App\Questionnair;
use Illuminate\Http\Request;

class QuestionnairController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
    public function create()
    {
        return view('Questionnair.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'required',
            'perpose' => 'required',
       ]); 

       $questionnair = auth()->user()->Questionnairs()->create($data);

       return redirect('/questionnair/'.$questionnair->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Questionnair  $questionnair
     * @return \Illuminate\Http\Response
     */
    public function show(Questionnair $questionnair)
    {
        
        $questionnair->load('questions.answers.responses');
        // dd($questionnair);
        return view('Questionnair.show',compact('questionnair'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Questionnair  $questionnair
     * @return \Illuminate\Http\Response
     */
    public function edit(Questionnair $questionnair)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questionnair  $questionnair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questionnair $questionnair)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questionnair  $questionnair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionnair $questionnair)
    {
        //
    }
}
