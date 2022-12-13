@extends('frontend.layouts.master')
@section('content')
<div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-4">
                @include('frontend.partials.sidebar')
            </div>
            <div class="col-md-8">
                <div class="widget">
                    <h1>Searched Product</h1>
              @include('frontend.pages.product.partials.all_products')
                </div>
            </div>
            
        </div>

    </div>
@endsection