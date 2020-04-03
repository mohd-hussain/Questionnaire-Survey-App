@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
  <hr>
 
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="/serveys/{{ $questionnair->id }}" role="button">Take another servey</a>
  </p>
</div>
 
@endsection 