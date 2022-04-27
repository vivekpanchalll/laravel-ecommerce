@extends('master')
@section('content')
<div class="custom-product">
    <div class="row">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>My Orders</h4>
                @foreach($order as $item)
                <div class="row searched-item cart-list-divider">
                    <div class ="col-sm-3">
                        <a href="details/{{$item->id}}">
                            <img src="{{$item->gallery}}" class="trending-image" alt="">
                        </a>
                    </div>
                    <div class ="col-sm-4">
                        <h3>Name : {{$item->name}}</h3>
                        <h5>Delivery Status : {{$item->status}}</h5>
                        <h5>Adress : {{$item->adress}}</h5>
                        <h5>Payment Status : {{$item->status}}</h5>
                        <h5>Payment Method : {{$item->payment_method}}</h5> 
                    </div>
                </div>
                @endforeach
            </div> 
        </div>
    </div>
</div>
@endsection
