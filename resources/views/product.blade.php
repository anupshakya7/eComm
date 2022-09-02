@extends('master')
@section('content')
<div class="custom-product">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">

        <div class="carousel-indicators">
            @foreach ($products as $productItems)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$productItems->id}}"
                class="{{$productItems['id']==1 ? 'active':''}}"></button>
            @endforeach
        </div>


        <div class="carousel-inner">
            @foreach ($products as $items)
            <div class="carousel-item {{$items['id']==1 ? 'active':''}}">
                <a href="/detail/{{$items->id}}">
                    <img src="{{$items->gallery}}" class="d-block w-100 slider-img" alt="...">
                    <div class="carousel-caption slider-text d-none d-md-block">
                        <h5>{{$items->name}}</h5>
                        <p>{{$items->description}}</p>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="trending-wrapper">
        <h3>Trending Products</h3>
        @foreach ($products as $item)
        <div class="trending-item">
            <a href="/detail/{{$item->id}}">
                <img src="{{$item->gallery}}" class="trending-image" alt="...">
                <div class="">
                    <h5>{{$item->name}}</h5>
                </div>
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection