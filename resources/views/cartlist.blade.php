@extends('master')
@section('content')



<div class="custom-cartlist">
    <div class="col-sm-12">
        <div class="trending-wrapper">
            <h4>Result For Products</h4>
            <a href="/ordernow" class="btn btn-success">Order Now</a><br>
            @foreach ($products as $item)
            <div class="row searched-item cart-list-divider mt-5">
                <div class="col-4">
                    <a href="detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" class="trending-image" alt=""></a>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <h2>{{$item->name}}</h2>
                        <h5>{{$item->description}}</h5>
                    </div>
                </div>
                <div class="col-sm-4">
                    <a class="btn btn-warning" href="/removecart/{{$item->cartId}}" class="">Remove to Cart</a></button>
                </div>
            </div>
            @endforeach
        
    </div>
</div>



@endsection