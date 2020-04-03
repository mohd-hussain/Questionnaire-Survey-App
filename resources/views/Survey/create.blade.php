@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>{{ $questionnair->title }}</h1>

            <form action="/serveys/{{$questionnair->id}}" method="POST">
            
                @csrf

                @foreach($questionnair->questions as $key => $question)

                <div class="card mt-4">
                    <div class="card-header"><strong>{{$key+1}}</strong> {{$question->question}}</div>

                        <div class="card-body">

                            @error('responses.' .$key . '.answer_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                            <ul class="list-group">
                                @foreach($question->answers as $answer)
                                    <label for="answer{{$answer->id}}">
                                        <li class="list-group-item">
                                            <input type="radio" name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id }}"
                                            {{ (old('responses.' .$key . '.answer_id') == $answer->id) ? 'checked' : '' }}
                                               class="mr-2" value="{{ $answer->id }}">
                                            {{$answer->answer}}

                                            <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
                                        </li>
                                    </label>
                                @endforeach
                            </ul>
                        </div>
                </div>
            @endforeach

            <div class="card mt-4">
                <div class="card-header">Enter Your Infomation</div>

                <div class="card-body">
                    
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="servey[name]" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" placeholder="Enter YourName">
                            <small id="nameHelp" class="form-text text-muted">Hello, Whats's your name ?</small>
                        </div>

                        @error('name')
                            <span><small class="text-danger">{{ $message }}</small>
                             </span>
                        @enderror

                         <div class="form-group">
                            <label for="email">Email</label>
                            <input name="servey[email]" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
                            <small id="emailHelp" class="form-text text-muted">Please Give your Email Address</small>
                        </div>

                        @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            </span>
                        @enderror

                        <div>
                             <button class="btn btn-dark mt-4 text-center" type="submit">Complere Servey</button>
                         </div>      
                   </div>
              </div>
           </form>
        </div>
    </div>
</div>
@endsection

