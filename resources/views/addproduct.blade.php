@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Product') }}</div>

                <div class="card-body">
                <form method="POST" action="/products/add">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" name='productName' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product name here">
                        <small id="emailHelp" class="form-text text-muted">Enter product here.</small>
                        @if ($errors->has('productName'))
                        <div class="text-danger">
                            {{ $errors->first('productName') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" name='category' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product category here">
                        <small id="emailHelp" class="form-text text-muted">Enter product category.</small>
                        @if ($errors->has('category'))
                        <div class="text-danger">
                            {{ $errors->first('category') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" name='price' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product price here">
                        <small id="emailHelp" class="form-text text-muted">Enter product price.</small>
                        @if ($errors->has('price'))
                        <div class="text-danger">
                            {{ $errors->first('price') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Description</label>
                        <textarea name='description' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description here">
                        </textarea>
                        <small id="emailHelp" class="form-text text-muted">Enter prodcut small description.</small>
                        @if ($errors->has('description'))
                        <div class="text-danger">
                            {{ $errors->first('description') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Image URL</label>
                        <input type="text" name='image' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Attach Product Image url">
                        <small id="emailHelp" class="form-text text-muted">Add product image url.</small>
                        @if ($errors->has('image'))
                        <div class="text-danger">
                            {{ $errors->first('image') }}
                        </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>

                    
                     <!-- Success message -->
                        @if(Session::has('success'))
                            <br>
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
