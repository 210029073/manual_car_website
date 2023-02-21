@extends('layouts')
@section('title','Add-product')
@section('content')
<div class='new-car'>
    <h1>Add items</h1>
    <form name="from-control" action="/store" method="post" style="width:70%; margin-left:15%;">
        @csrf
        <label>Model</label>
        <input type='text' placeholder='Model' name='model' class='form-control'>
        <label>Descripton</label>
        <textarea class="form-control" placeholder="Description" name="description"></textarea>
        <label>Transmission</label></br>
        <select class='form-control1' placeholder='Transmission' name='Transmission'>
            <option value='Manual'>Manual</option>
            <option value='Automatic'>Automatic</option>
        </select></br>
        <label>Brand</label>
        <input type='text' class='form-control' placeholder='Brand' name='brand'>
        <label>Price: £</label>
        <input type='float' class='form-control' placeholder='Price' name='price'>
        <label>Image</label>
        <input type='text' class='form-control' placeholder='image name' name='img'>
        <input type="submit" value="Submit">
    </form>
</div>
@stop