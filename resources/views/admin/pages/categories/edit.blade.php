@extends('admin.layouts.master')
@section('content')
<div class="main-panel">

    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                @if(Session::has('msg'))
                <h3 class="alert alert-success">{{ Session::get('msg') }}</h3>
                @endif
                <h2 class="">Edit Category</h2>
            </div>
            <div class="card-body">
            <form action="{{ route('admin.category.update',$category->id) }} " method="post" enctype="multipart/form-data">
                @csrf
                    @include('admin.partials.messages')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{ $category->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description(optional)</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{!! $category->description !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Parent Category(optional)</label>
                        <select class="form-control" name="parent_id" id="">
                            <option value="">Please Select a primary Category </option>
                            @foreach($main_categories as $cat)
                            <option value="{{ $cat->id}}" {{ $cat->id == $category->parent_id ? 'selected' : '' }} > {{ $cat->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Category Old Image</label>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('images/categories/'.$category->image) }}" width="50">
                              
                            </div>
                        </div>
                        <label for="image">Category New Image(optional)</label>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="image" id="image" >
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update Category</button>
                </form>
            </div>
        </div>

    </div>
   
</div>
@endsection