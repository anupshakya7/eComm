@extends('master')
@section('content')
<div class="custom-detail">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$products->gallery}}" alt="">
        </div>
        <div class="col-sm-6">
            <div>
                <a href="/">Go Back</a>
                <h2>{{$products->name}}</h2>
                <h5>Price: {{$products->price}}</h5>
                <h6>Details: {{$products->description}}</h6>
                <h6>Category: {{$products->category}}</h6>
                <br><br>
                <form action="/add_to_cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$products->id}}">
                    <button class="btn btn-primary">Add to Cart</button>
                </form>
                <br><br>
                <button class="btn btn-success">Buy Now</button>
                <br><br>
            </div>


        </div>
    </div>
</div>
@endsection