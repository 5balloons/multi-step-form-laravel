@extends('layout.layout')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Description</th>
            <th scope="col">Company</th>
            <th scope="col">Amount</th>
            <th scope="col">Available</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td><a href="/tasks/{{$product->id}}">{{$product->title}}</a></td>
                <td>{{$product->description}}</td>
                <td>{{$product->company}}</td>
                <td>{{$product->amount}}</td>
                <td>{{$product->available ? 'Yes' : 'No'}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection