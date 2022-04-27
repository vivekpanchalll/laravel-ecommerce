@extends('master')
@section('content')
<div class="custom-product">
    <div class="row">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Result for Product</h4>
                <a href="orderNow" class="btn btn-primary">orderNow</a></br></br>
                @foreach($product as $item)
                <div class="row searched-item cart-list-divider">
                    <div class ="col-sm-3">
                        <a href="details/{{$item->id}}">
                            <img src="{{$item->gallery}}" class="trending-image" alt="">
                        </a>
                    </div>
                    <div class ="col-sm-4">
                            <h3>{{$item->name}}</h3>
                            <h5>{{$item->description}}</h5>
                    </div>
                    <div class ="col-sm-3">
                        <a href="/removeCart/{{$item->cart_id}}" class="btn btn-info">Remove from cart</a>
                    </div>
                </div>
                @endforeach
            </div> 
        </div>
    </div>
</div>
@endsection
