@extends('layouts.main')
<head>
    <style>
        .errors-container {
            display: flex;
            justify-content: center;
            flex-direction: row;
        }
    </style>
</head>
@section('content')
    <div class="errors-container">
        <div class="page-errors">
            <div class="page-errors unauthorised-error-container">
                <div class="page-errors unauthorised-error-header">
                    <h1>404 Not Found</h1>
                </div>
                <div class="page-errors unauthorised-error-content">
                    <h2>Reason: </h2>
                    <p>{{$exception->getMessage()}}</p>
                    <h2>What can I do?</h2>
                    <p>Try the following links below: </p>
                    <ul>
                        <li>To login <a href="{{route('loginPage')}}">Click here.</a></li>
                        <li>To return to the homepage <a href="{{route('home')}}">Click here</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
