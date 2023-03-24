@extends('layouts')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/homepage.css" type="text/css">
    </head>
    <body>
        
        
        
        <div class="body1">
            <div class="WelcomeandBrowse">
                <h1>Welcome to Manual</h1>
                <div class="browseCarsBtn">
                    <div><a href="{{route("products")}}">Browse Cars</a></div>
                </div>
            </div>
        </div>
        @endsection
    </body>
    </html>