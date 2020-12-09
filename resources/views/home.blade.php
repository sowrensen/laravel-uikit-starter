@extends('uikit::page')

@section('title', 'Home')

@section('content')
    <div class="uk-card uk-card-default uk-card-body">
        <h3 class="uk-card-title">Home</h3>
        <div>
            <p>Hey <span class="uk-text-bold uk-text-danger">{{ explode(' ', auth()->user()->name)[0] }}</span>,
                good to see you!</p>
            <form action="{{ route('logout') }}" method="post" class="uk-margin-top uk-text-right">
                @csrf
                <button type="submit" class="uk-button uk-button-default">Logout</button>
            </form>
        </div>
    </div>
@stop
