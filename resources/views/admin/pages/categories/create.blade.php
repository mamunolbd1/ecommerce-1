@extends('admin.layouts.master')
@section('content')
<div class="main-panel">

    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                @if(Session::has('msg'))
                <h3 class="alert alert-success">{{ Session::get('msg') }}</h3>
                @endif
                <h2 class="">Add Category</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.category.store') }} " method="post" enctype="multipart/form-data">
                @csrf
                    @include('admin.partials.messages')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Category Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Enter your description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Parent Category</label>
                        <select class="form-control" name="parent_id" id="">
                            @foreach($main_categories as $category)
                            <option value="{{ $category->id}}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="image" id="image" >
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
            </div>
        </div>

    </div>
   
</div>
@endsection