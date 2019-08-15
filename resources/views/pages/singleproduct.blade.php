@extends('layouts\app')

@section('content')

<header id="header-back" class="pb-4" style="background-attachment: fixed; height: 0% !important;">
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
            <div class="col-md-6 mx-auto mt-5 pt-5">
                <h1 style="font-size: 4em;"class="text-white">
                    {{ $fetchedPro[0]->name }}
                </h1>
            </div>
        </div>
    </div>
</header>

<section id="image-section" class="back-color text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-5">
                <div class="card">
                    <img class="card-img-top" id="target-product" src="{{ asset('images/product').'/'.$fetchedPro[0]->product_image }}" alt="Card image">
                </div>
            </div>
            <div class="col-md-6 pt-1 my-5">
                <h5>Product Description</h5>
                <P>{{ $fetchedPro[0]->product_description }}</p>
                <div class="d-flex flex-row">
                    <div class="p-1"><h3><del>$64</del></h3></div>
                    <div class="p-1"><h3>$34</h3></div>
                </div>
                <form class="form-inline" method="post" action="{{ route('showProductForm', [$fetchedPro[0]->id]) }}">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- <div class="d-inline"> -->
                    <!-- <label for="email" class="pr-2">Quantity</label> -->
                    <input type="number" class="form-control mr-2" id="quantity" name="quantity">
                    <input type="hidden" name="userId" id="userId" value="{{ Auth::user()->id }}">
                    <input type="hidden" id="productName" name="productName" value="{{ $fetchedPro[0]->name }}">
                    <input type="hidden" name="ProductPrice" id="ProductPrice" value="34">
                    <!-- </div> -->
                    <button type="submit" class="btn btn-danger">ADD TO CART</button>
                </form>
                <div class="row pt-3">
                    <div class="col-3">
                        <div class="card">
                            <img class="card-img-top suggested-product" src="{{ asset('assets/product/product-1.jpg') }}" alt="Card image">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <img class="card-img-top suggested-product" src="{{ asset('assets/product/product-2.jpg') }}" alt="Card image">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <img class="card-img-top suggested-product" src="{{ asset('assets/product/product-1.jpg') }}" alt="Card image">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <img class="card-img-top suggested-product" src="{{ asset('assets/product/product-1.jpg') }}" alt="Card image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <div class="container">
                    <!-- <h2>Toggleable Tabs</h2>
                    <br> -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home">Product Description</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1">Comments</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
                        </li> -->
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                            <h3>Product Description</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div id="menu1" class="container tab-pane fade"><br>
                            <h3>Comments</h3>
                            <!-- <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                            <div class="row">
                                <div class="col-md-1 col-3 d-inline">
                                    <div class="align-bottom  ">
                                        <div class="card">
                                            <img class="card-img-top" src="{{ asset('assets/product/product-1.jpg') }}" alt="Card image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="justify-content-start">
                                        <form action="">
                                            <input type="text" class="form-control" name="comment">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div id="menu2" class="container tab-pane fade"><br>
                            <h3>Menu 2</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12">
                <h3 class="py-4">Suggested products</h3>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets/product/product-1.jpg') }}" alt="Card image">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets/product/product-1.jpg') }}" alt="Card image">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets/product/product-1.jpg') }}" alt="Card image">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets/product/product-1.jpg') }}" alt="Card image">
                </div>
            </div>
        </div>
    </div>
<section>

<script type="application/javascript">
    (function(){
        let suggestedProduct = [].slice.call(document.getElementsByClassName('suggested-product'));
        suggestedProduct.forEach(function (element, index){
            // console.log(element.src);
            element.addEventListener('click', function(e){
                let targetProduct = document.getElementById('target-product');
                targetProduct.src = this.src;
                console.log(this.src);
                e.preventDefault();
            })
        })
        
    })();
</script>

@endsection