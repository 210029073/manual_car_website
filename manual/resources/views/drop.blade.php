@extends('layouts')
@section('title','Products')
@section('content')
<div>
    <form name="from-control" action="/drop1" method="post" style="width:70%; margin-left:15%;">
        @csrf
        <label>Products Id</label>
        <input type='text' placeholder='ProductsId' name='productsId' class='form-control'>
        <input type="submit" value="Submit">
    </form>
</div>
@stop 