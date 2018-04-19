@extends('layout.layout')

@section('content')
    <h1>Add New Product - Step 3</h1>
    <hr>
    <h3>Review Product Details</h3>
    <form action="/products/store" method="post" >
        {{ csrf_field() }}
        <table class="table">
            <tr>
                <td>Product Name:</td>
                <td><strong>{{$product->name}}</strong></td>
            </tr>
            <tr>
                <td>Product Amount:</td>
                <td><strong>{{$product->amount}}</strong></td>
            </tr>
            <tr>
                <td>Product Company:</td>
                <td><strong>{{$product->company}}</strong></td>
            </tr>
            <tr>
                <td>Product Available:</td>
                <td><strong>{{$product->available ? 'Yes' : 'No'}}</strong></td>
            </tr>
            <tr>
                <td>Product Description:</td>
                <td><strong>{{$product->description}}</strong></td>
            </tr>
            <tr>
                <td>Product Image:</td>
                <td><strong><img alt="Product Image" src="/storage/productimg/{{$product->productImg}}"/></strong></td>
            </tr>
        </table>
        <a type="button" href="/products/create-step1" class="btn btn-warning">Back to Step 1</a>
        <a type="button" href="/products/create-step2" class="btn btn-warning">Back to Step 2</a>
        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
@endsection