@extends('master')
@section('content')

<div class="custom-cartlist">
    <div class="col-sm-12">
        <div class="trending-wrapper">
            <h4>Result For Products</h4>
            @foreach ($products as $item)
            <div class="searched-item">
                <a class="card"
                    style="float: left; width:400px;height:360px;margin:10px;padding:10px; text-decoration: none;"
                    href="detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" style="height: 200px" class="trending-image" alt="">
                    <div class="mt-3">
                        <h4 style="text-align:center; color:#000;">{{$item->name}}</h4>
                        <h6 style="text-align:center;color:grey;">{{$item->description}}</h6>
                        <button class="mt-2 btn btn-warning float-end">Remove to Cart</button>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection