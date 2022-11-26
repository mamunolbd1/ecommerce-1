@extends('admin.layouts.master')
@section('content')
<div class="main-panel">

    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                @if(Session::has('msg'))
                <h3 class="alert alert-success">{{ Session::get('msg') }}</h3>
                @endif
                <h2 class="">Manage Category</h2>
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Category Image</th>
                        <th>Parent Category</th>
                        <th>Action</th>
                    </tr>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <!-- <img src="{{ asset('images/categoreies/'.$category->image) }}" width="100"> -->
                    

                            <img src="{{ asset('images/categories/'.$category->image) }}" width="50">
                            
                        </td>
                        <td>
                            @if($category->parent_id == NULL)
                                primary category
                            @else
                                {{ $category->parent->name }}
                            
                             @endif

                        </td>
                        <td > 
                            <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-success" >Edit</a>
                            <a href="#deleteModal{{ $category->id }}" data-toggle="modal" class="btn btn-danger" >Delete</a>

                            <!-- Delete Modal -->
                            <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Are you sure to Delete?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                               
                                <form action="{{ route('admin.category.delete',$category->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">Permanent Delete</button>

                                </form>
                                </div>
                                <div class="modal-footer">
                                   
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
   
</div>
@endsection