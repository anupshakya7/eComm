@extends('master')
@section('content')
<div class="container custom-order-now">
  <div class="col-sm-12">
    <table class="table">
      <tbody>
        <tr>
          <th scope="row">Amount</th>
          <td>{{$total}}</td>
        </tr>
        <tr>
          <th scope="row">Tax</th>
          <td>$ 0</td>
        </tr>
        <tr>
          <th scope="row">Delivery</th>
          <td>$ 10</td>
        </tr>
        <tr>
          <th scope="row">Total Amount</th>
          <td>{{$total+10}}</td>
        </tr>

      </tbody>
    </table>

    <div class="container mb-5">
      <form action="/orderplace" method="POST">
        @csrf
        <div class="mb-3">
          <textarea name="address" style="resize:none;width:1000px;" placeholder="enter your address"></textarea>
        </div>
        <div class="mb-3">
          <label for="payment" class="form-label">Payment Method</label><br>
          <input type="radio" value="cash" name="payment"><span>online payment</span><br>
          <input type="radio" value="cash" name="payment"><span>EMI payment</span><br>
          <input type="radio" value="cash" name="payment"><span>Payment on Delivery</span>
        </div>

        <button type="submit" class="btn btn-primary">Order Nowv </button>
      </form>
    </div>

  </div>
</div>
@endsection