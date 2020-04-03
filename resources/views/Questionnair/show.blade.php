@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$questionnair->title}}</div>

                    <div class="card-body">
                        <a href="/questionnairs/{{$questionnair->id}}/questions/create" class="btn btn-dark">Add New Question</a>
                        <a href="/serveys/{{$questionnair->id}}" class="btn btn-dark">Take Servey</a>
                    </div>
            </div>
            

            @foreach($questionnair->questions as $question)

                <div class="card">
                    <div class="card-header">{{$question->question}}</div>

                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($question->answers as $answer)
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>{{$answer->answer}}</div>
                                        @if($question->responses->count())            
                                            <div>{{ intval(($answer->responses->count() * 100) / $question->responses->count()) }}%</div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="card-footer">
                            <form action="/questionnairs/{{$questionnair->id}}/questions/{{$question->id}}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete Question</button>
                            </form>
                        </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
