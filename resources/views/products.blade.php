@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg--12">
            <div class="card">
                <div class="card-header">{{ __('Product List') }} &nbsp;
                <a href="{{ route('addproduct') }}"><div class="btn btn-primary">
                Add New
                </div></a>
                </div>

                <div class="card-body">
                <table style="width:100%" class="table table-hover">
                    <caption>Product List</caption>
                    <tr>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price</th>
                    </tr>
                    @foreach ($list as $product)
                    <tr>
                        <td>{{$product->productName}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                        <img src="{{$product->image}}" alt="Product Image" width="80" height="100"></td>
                        <td>$ {{$product->price}}</td>
                    </tr>
                    @endforeach
                    
                </table>
                {{ $list->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
