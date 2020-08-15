@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg--12">
            <div class="card">
                <div class="card-header">{{ __('Order List') }}</div>

                <div class="card-body">
                <table style="width:100%" class="table table-hover">
                    <caption>Orders List</caption>
                    <tr>
                        <th>Order Id</th>
                        <th>Customer</th>
                        <th>Email</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                    @foreach ($list as $order)
                    <tr>
                        <td>Order-{{$order->id}}</td>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->user->email}}</td>
                        <td>$ {{$order->order_total}}</td>
                        <td>{{$order->status}}</td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
