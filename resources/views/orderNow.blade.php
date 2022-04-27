
@extends('master')
@section('content')
<div class="custom-product">
    <div class="row">
        <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Amount</th>
                    <td>$ {{$total}}</td>
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
                    <th scope="row">Total</th>
                    <td>{{$total + 10}}</td>
                </tr>
            </tbody>
            </table>
            <div>
            <form action="/orderplace" method="post">
                @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="enter your adress" id="adress" cols="110" rows="2"></textarea>
                </div>
                <div class="mb-3">
                    <label for="examplepayment" class="form-label">Payment Method</label><br>
                    <input type="checkbox" name="payment" value="cash" class="form-check-input" id="exampleCheck1">
                    <span>Online Payment</span></br></br>
                    <input type="checkbox" name="payment" value="cash" class="form-check-input" id="exampleCheck1">
                    <span>EMI payment</span></br></br>
                    <input type="checkbox" name="payment" value="cash" class="form-check-input" id="exampleCheck1">
                    <span>Payment on Delivery</span></br></br>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
