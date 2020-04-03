@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/questionnair/create" class="btn btn-dark">Create a Questionnair</a>
                </div>
            </div>

           <div class="card mt-4">
                <div class="card-header">My Questionnairs</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($questionnaires as $questionnair)
                            <li class="list-group-item">
                                <a href="{{ $questionnair->path() }}">{{$questionnair->title}}</a>

                                <div class="mt-2">
                                    <small>Share URL</small>
                                    <p>
                                        <a href="{{ $questionnair->publicPath() }}">{{ $questionnair->publicPath() }}</a>
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    
                </div>
            </div>

        </div> 
    </div>
</div>
@endsection
