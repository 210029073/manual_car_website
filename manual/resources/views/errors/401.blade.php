@extends('layouts')
@section('content')
    <div class="page-errors">
        <div class="page-errors unauthorised-error-container">
            <div class="page-errors unauthorised-error-header">
                <h1>401 Unauthorised</h1>
                <h1>You are not allowed to access this page.</h1>
            </div>
            <div class="page-errors unauthorised-error-content">
                <h2>Reason: </h2>
                <p>{{$exception->getMessage()}}</p>
                <h2>What can I do?</h2>
                <p>Try the following links below: </p>
                <ul>
                    <li>To login <a href="{{route('loginPage')}}">Click here.</a></li>
                    <li>To return to the homepage <a href="{{route('home')}}">Click here</a></>
                </ul>
            </div>
        </div>
    </div>
@endsection
