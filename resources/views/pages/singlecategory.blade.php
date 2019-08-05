@extends('layouts\app')

@section('content')
    <header id="header-back" style="height:auto;padding-bottom:10rem;">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark">
                <a class="navbar-brand navbar-brand-custom" href="#"><img src="{{ asset('assets/logo.png') }}" class="img-fluid" alt="logo"></a>
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
    <section>
        <div class="container-fluid" style="background-color:#FFFFFD;">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="row py-5">
                        @forelse($relatedProducts as $cat)
                            <div class="col-md-3">
                                <div class="card my-3 " style="width: 100%;">
                                <img src="{{asset('images/product/'.$cat->product_image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold text-danger">{{ $cat->name }}</h5>
                                    <p class="card-text text-danger">{{ $cat->product_description }}</p>
                                    <a href="{{ url('product/'.str_replace (' ','_',$cat->id)) }}" style="background-color:#943D2B;" class="btn text-white">Go somewhere</a>
                                </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-danger font-weight-bold">No Product Found</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection