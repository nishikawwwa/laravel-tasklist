@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            @if (count($tasks) >0)
                @include('tasks.index',['tasks' => $tasks])
            @endif
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklist</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection