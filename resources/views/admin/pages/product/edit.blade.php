@extends('admin.layouts.master')
@section('content')
<div class="main-panel">

    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                @if(Session::has('msg'))
                <h3 class="alert alert-success">{{ Session::get('msg') }}</h3>
                @endif
                <h2 class="">Edit Product</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.product.update',$product->id) }} " method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.partials.messages')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->title }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" > {{ $product->description }}" </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ $product->price }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ $product->quantity }}">
                    </div>
                    <div class="form-group">
                        <label for="product_image">Upload Image</label>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
        </div>

    </div>
   
</div>
@endsection