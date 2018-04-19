@extends('layout.layout')

@section('content')
    <h1>Add New Product - Step 2</h1>
    <hr>
    @if(isset($product->productImg))
    Product Image:
    <img alt="Product Image" src="/storage/productimg/{{$product->productImg}}"/>
    @endif
    <form action="/products/create-step2" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Upload Product Image</h3><br/><br/>

        <div class="form-group">
            <input type="file" {{ (!empty($product->productImg)) ? "disabled" : ''}} class="form-control-file" name="productimg" id="productimg" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
        </div>
        <button type="submit" class="btn btn-primary">Review Product Details</button>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form><br/>
    @if(isset($product->productImg))
    <form action="/products/remove-image" method="post">
        {{ csrf_field() }}
    <button type="submit" class="btn btn-danger">Remove Image</button>
    </form>
    @endif
@endsection