@extends('layouts\app')

@section('content')
    <header id="header-back" style="height:auto;padding-bottom:10rem;">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand navbar-brand-custom" href=" {{ route('home') }}"><img src="{{ asset('assets/logo.png') }}" class="img-fluid" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <form class="form-inline my-2 my-md-0 col-md-6">
                        <input class="form-control back-color text-white search" style="width:80% !important" type="text" placeholder="Search choclate">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary border-left-0 border" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </form>
                    <ul class="navbar-nav ml-auto display-5">
                    <li class="nav-item active">
                        <a class="nav-link display-5  text-danger" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-danger" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choclates</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item text-danger" href="#">Coco choclate</a>
                        <a class="dropdown-item text-danger" href="#">Sugarfree choclate</a>
                        <a class="dropdown-item text-danger" href="#">Luxury choclate</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-danger" href="#">Contact Us</a>
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section id="item-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="jumbotron bg-light">
                        @if (session('success'))
                            <div class="alert alert-success mt-3" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <h2>Product Summary</h2>
                        <p>
                           @if( Cart::instance(Auth::user()->email)->content()->count() > 0 )
                                {{ 'Thanks! for your precious time, enjoy with your order' }}  
                            @else
                               {{ "You havn't place any order yet" }}
                            @endif
                        </p>            
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Item(s)</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                                {{-- @if(Cart::instance(Auth::user()->email)->content() > 0) --}}
                                    @foreach (Cart::instance(Auth::user()->email)->content() as $content)
                                        <tr>
                                            <td>{{ $content->name }}</td>
                                            <td>{{ $content->price }}</td>
                                            <td>{{ $content->qty }}</td>
                                            <td>{{ $content->qty }}</td>
                                        </tr>
                                    @endforeach
                                {{-- @endif --}}
                            {{-- <tr>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>mary@example.com</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>july@example.com</td>
                            </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-white my-5 border">
                        <div class="card-body">
                            <h1 class="text-danger mt-3 font-weight-bold">Order Summary</h1>
                            <div class="d-flex flex-coloumn">
                                <div class="p-2 flex-fill text-left">Tax</div>
                            <div class="p-2 flex-fill text-right"> $ {{ Cart::tax() }}</div>
                            </div>
                            <div class="d-flex flex-coloumn">
                                <div class="p-2 flex-fill text-left">Subtotal</div>
                            <div class="p-2 flex-fill text-right">$ {{ Cart::subtotal() }}</div>
                            </div>
                            {{-- <div class="d-flex flex-coloumn">
                                <div class="p-2 flex-fill text-left">Total</div>
                            <div class="p-2 flex-fill text-right">$ {{ Cart::total() }}</div>
                            </div> --}}
                            <hr class="border border-dark mt-5">
                            <div class="d-flex flex-coloumn">
                                <div class="p-2 flex-fill text-left font-weight-bold">Order Total</div>
                            <div class="p-2 flex-fill text-right">$ {{ Cart::total() }}</div>
                            </div>
                            <input type="submit" value="Submit" id="cart-submit" class="btn btn-danger btn-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        setTimeout(() => {
           let success = document.querySelector('.alert');
           success.remove(); 
        }, 3000);
    </script>

@endsection