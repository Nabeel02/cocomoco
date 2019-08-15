@extends('layouts\app')
    <?php
        if(Auth::check()){
            // var_dump($data);
            // foreach ($data as $value) {
            //     echo $value['email'];
            // }
            // echo Auth::user()->id;
        }
    ?>
@section('content')
    <header id="header-back">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-dark">
                    <a class="navbar-brand navbar-brand-custom" href="{{ route('home') }}"><img src="{{ asset('assets/logo.png') }}" class="img-fluid" alt="logo"></a>
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
                <div class="container">
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-7 mt-5 pt-5">
                            <h1 style="font-size: 4em;"class="text-white">
                                ALL YOU NEED <span class="text-danger">LOVE</span>
                                CHOCOLATE
                            </h1>
                        </div>
                    </div>
                </div>
    </header>
    <section id="recently-added">
        <h1 class="display-5 text-center text-danger pt-5">Recently Added</h1>
        <div class="container">
            <div class="row py-5">
                <div class="col-10  mx-auto ">
                    <div class="row text-center">
                        
                        @foreach ($recentPro as $pro)
                        <div class="col-md-4">
                            <div class="card" style="width:100%">
                                <img class="card-img-top" src="{{asset('images/product/'.$pro->product_image)}}" alt="Card image cap">
                                <div class="card-body">
                                <p class="card-text text-center">{{ $pro->product_description }}</p>
                                    <div class="col-md-12 text-center">
                                    <a href="{{ url('product/'.str_replace (' ','_',$pro->id)) }}" class="btn btn-primary back-color btn-md mb-2">Go somewhere</a>
                                    <button class="btn btn-success btn-block px-4">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="category" class="py-5">
        <h1 class="display-5 text-center text-danger ">
            Categories Of Choclates
        </h1>
        <div class="container  custom-category p-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            @foreach ($recentCategory as $category )
                                <div class="col-md-3">
                                    <div class="card card-category">
                                        <img class="card-img-top" src="{{ asset('images/category/'.$category->category_image) }} " alt="Card image cap">
                                        <div class="card-body px-0">
                                            <p class="card-text text-center">Indulge ultra couverture dipping & enrobing choclate - milk.</p>
                                        <a href="{{ url('category/'.str_replace (' ','_',$category->id)) }}" class="btn btn-primary back-color btn-block py-2">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mostFamous">
        <h1 class="display-5 text-center text-danger">Most Famous</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-5 my-5 famous-box">
                    <img class="img-fluid" src="{{ asset('assets/famous-1.jpg') }}"/>
                </div>
                <div class="col-md-2 my-0 my-md-5 text-center">
                    <h3 class="display-5">
                        <b>Looking for a Special Gift</b>
                    </h3>
                    <p class="lead" style="font-size: 98%;">
                        THE SEASON MUST HAVE GIFT FOR EVERYONE AND EVERY OCCASION
                    </p>
                    <a type="button" style="background-color: #3D2700;" class="btn btn-primary btn-md pr-4 pl-4 text-white">Shop Now</a>
                </div>
                <div class="col-md-5 my-5 famous-box">
                    <img class="img-fluid" src="{{ asset('assets/famous-2.jpg') }}"/>
                </div>
            </div>
        </div>
    </section>
    <section id="mostSeller" class="mt-5">
        <div class="row mr-0">
            <div class="col-md-5 ">
                <img class="img-fluid mstsler-img d-none d-md-block" src="{{ asset('assets/most-seller.jpg') }}" />
            </div>
            <div class="col-md-7">
                <div class="container">
                    <div class="row">
                        <div class="col-4 pt-3">
                            <div class="card" >
                                <img class="card-img-top custom-famous-img" src="{{ asset('assets/product/product-3.jpg') }}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <p class="card-text text-white">Indulge ultra couverture dipping & enrobing choclate - milk.</p>
                                    <div class="col-md-12 text-center">
                                    <a href="#" class="btn btn-primary back-color btn-sm mb-2">Go somewhere</a>
                                    <button class="btn btn-success btn-sm pr-3 pl-3">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 pt-3">
                            <div class="card" >
                                <img class="card-img-top custom-famous-img" src="{{ asset('assets/product/product-3.jpg') }}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <p class="card-text text-white">Indulge ultra couverture dipping & enrobing choclate - milk.</p>
                                    <div class="col-md-12 text-center">
                                    <a href="#" class="btn btn-primary back-color btn-sm mb-2">Go somewhere</a>
                                    <button class="btn btn-success btn-sm pr-3 pl-3">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 pt-3">
                            <div class="card" >
                                <img class="card-img-top custom-famous-img" src="{{ asset('assets/product/product-3.jpg') }}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <p class="card-text text-white">Indulge ultra couverture dipping & enrobing choclate - milk.</p>
                                    <div class="col-md-12 text-center">
                                    <a href="#" class="btn btn-primary back-color btn-sm mb-2">Go somewhere</a>
                                    <button class="btn btn-success btn-sm pr-3 pl-3">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection