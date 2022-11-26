<div class="row">
    @foreach($products as $product)
    <div class="col-md-3">
        <div class="card" style="">
            @php $i=1; @endphp
            @foreach($product->image as $image)
            @if($i>0)
            <a href="{!! route('product.show',$product->slug) !!}">
                <img class="card-img-top" style="height: 10rem" src=" {{ asset('images/products/'.$image->image) }}" alt="{{ $product->title }}">
            </a>
            @endif
            @php $i-- ; @endphp
            @endforeach
            
            <div class="card-body text-center">
                <h5 class="card-title">
                    <a href="{!! route('product.show',$product->slug) !!}">{{ $product->title}}</a>
                </h5>
                <p class="card-text">Price -- {{$product->price}} Tk</p>
                <a href="#" class="btn btn-outline-warning">Add To Cart</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="pagination mt-4">
    {{ $products->links() }}
</div>