@extends('master')
@section('content')



<div class="custom-cartlist">
    <div class="col-sm-12">
        <div class="trending-wrapper">
            <h4>My Orders</h4>

            @foreach ($orders as $item)
            <div class="row searched-item cart-list-divider mt-5">
                <div class="col-4">
                    <a href="detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" class="trending-image" alt=""></a>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <h2>Name: {{$item->name}}</h2>
                        <h6>Delivery Status: {{$item->description}}</h6>
                        <h6>Address: {{$item->address}}</h6>
                        <h6>Payment Status: {{$item->payment_status}}</h6>
                        <h6>Payment Method: {{$item->payment_method}}</h6>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>



    @endsection