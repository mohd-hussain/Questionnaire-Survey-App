@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questionnaire</div>

                <div class="card-body">
                    
                    <form action="/questionnair" method='POST'>

                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
                            <small id="titleHelp" class="form-text text-muted">Give your Questionnair  a title that attracts attention</small>
                        </div>

                        @error('title')
                            <span><small class="text-danger">{{ $message }}</small>
                             </span>
                        @enderror

                         <div class="form-group">
                            <label for="perpose">Perpose</label>
                            <input name="perpose" type="text" class="form-control @error('perpose') is-invalid @enderror" id="perpose" aria-describedby="perposeHelp" placeholder="Enter Perpose">
                            <small id="perposeHelp" class="form-text text-muted">Giving a Perpose will increase response</small>
                        </div>

                        @error('perpose')
                                <small class="text-danger">{{ $message }}</small>
                            </span>
                        @enderror

                        <button type="submit" class="btn btn-primary">Create Questionnair</button>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
