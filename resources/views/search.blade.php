@extends('master')
@section('content')
<div class="custom-product">
    <div class="row">
        <div class="col-sm-4 m-3">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h4>Result for Product</h4>
                @foreach($product as $item)
                <div class="searched-item">
                    <a href="details/{{$item['id']}}">
                        <img src="{{$item['gallery']}}" class="trending-image   " alt="">
                        <h3>{{$item['name']}}</h3>
                        <h5>{{$item['description']}}</h5>
                    </a>
                </div>
                @endforeach
            </div> 
        </div>
    </div>
</div>
@endsection
