@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Question Here</div>

                <div class="card-body">
                    
                    <form action="/questionnairs/{{$questionnair->id}}/questions" method='POST'>

                        @csrf

                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" type="text" class="form-control" id="question"
                            value="{{ old('question.question') }}"
                            aria-describedby="questionHelp" placeholder="Enter Question">
                            <small id="questionHelp" class="form-text text-muted">Ask simple and to-the-point Questions for best results </small>
                        </div>

                        @error('question.question')
                                <small class="text-danger">{{ $message }}</small>
                            </span>
                        @enderror

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="choiceHelp" class="form-text text-muted">Give Choice that gives you the most insight into your question. </small>

                                <div>

                                    <div class="form-group">
                                        <label for="answer1">Choice 1</label>
                                        <input name="answers[][answer]" type="text" class="form-control" 
                                        value="{{ old('answers.0.answer') }}"
                                        id="answer1" aria-describedby="choiceeHelp" placeholder="Enter Choice 1">
                                    

                                        @error('answers.0.answer')
                                                <small class="text-danger">{{ $message }}</small>
                                            </span>
                                        @enderror
                                    </div>

                                        <div class="form-group">
                                            <label for="answer2">Choice 2</label>
                                            <input name="answers[][answer]" type="text" class="form-control" 
                                            value="{{ old('answers.1.answer') }}"
                                            id="answer2" aria-describedby="choiceeHelp" placeholder="Enter Choice 2">
                                        

                                            @error('answers.1.answer')
                                                    <small class="text-danger">{{ $message }}</small>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="answer3">Choice 3</label>
                                            <input name="answers[][answer]" type="text" class="form-control"
                                            value="{{ old('answers.2.answer') }}" 
                                            id="answer3" aria-describedby="choiceeHelp" placeholder="Enter Choice 3">
                                        

                                            @error('answers.2.answer')
                                                    <small class="text-danger">{{ $message }}</small>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="answer4">Choice 4</label>
                                            <input name="answers[][answer]" type="text" class="form-control" 
                                            value="{{ old('answers.3.answer') }}"
                                            id="answer4" aria-describedby="choiceeHelp" placeholder="Enter Choice 4">
                                        

                                            @error('answers.3.answer')
                                                    <small class="text-danger">{{ $message }}</small>
                                                </span>
                                            @enderror
                                        </div>

                                </div>

                            </fieldset>
                        </div>

                         

                        <button type="submit" class="btn btn-primary">Create Questionnair</button>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
