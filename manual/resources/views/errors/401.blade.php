@extends('layouts')
@section('content')
<h1>401: Access is Forbidden</h1>
<h2>{{$exception->getMessage()}}</h2>
@endsection
