<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>nmkTask</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

            <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 20vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/cart') }}">My Cart</a>
                       
                    @else
                    <a href="{{ url('/cart') }}">My Cart</a>
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif              
        </div>
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg--12">
            <div class="card">
                <div class="card-header">{{ __('Product List') }} &nbsp;                
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
                        <th>Add</th>
                    </tr>
                    @foreach ($list as $product)
                    <tr>
                        <td>{{$product->productName}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                        <img src="{{$product->image}}" alt="Product Image" width="80" height="100"></td>
                        <td>$ {{$product->price}}</td>
                        <td><div class="btn btn-success">Add cart<div></td>
                    </tr>
                    @endforeach
                    
                </table>
                {{ $list->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
</html>
