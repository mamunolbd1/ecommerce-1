@extends('frontend.layouts.master')
@section('content')
<div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        Cras justo odio
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                
                </div>
            </div>
            <div class="col-md-8">
                <div class="widget">
                    <h1>All Product</h1>

                          @include('frontend.pages.product.partials.all_products')

                </div>
            </div>
            
        </div>

    </div>
@endsection