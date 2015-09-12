@extends('e_shop.layouts.master')
@section('title', trans('e_shop.title'))
@section('styles')
@endsection

@section('content')
    <div class="row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="center-block" src="{!! url('e-shop/img/landing/happy-dogs.jpg') !!}" alt="Sad cute dog image">
                </div>
                <div class="item">
                    <img class="img-responsive" src="{!! url('e-shop/img/landing/happy-cat.jpg') !!}" alt="Sad cute dog image">
                </div>
                <div class="item">
                    <img class="img-responsive" src="{!! url('e-shop/img/landing/cute-rabbit.jpg') !!}" alt="Sad cute dog image">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span> </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span> </a>
        </div>
    </div>

    <div class="container top-buffer">
        <h3>{!! trans('e_shop.landing.popular_products') !!}
            <a class="left fa fa-chevron-left btn" href="#carousel-example"
                    data-slide="prev"></a> <a class="right fa fa-chevron-right btn" href="#carousel-example"
                    data-slide="next"></a>
        </h3>
        <div id="carousel-example" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="row">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12 center-block">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="{!! url('e-shop/img/landing/dummy_popular_product_1.png') !!}" class="img-responsive" alt="Popular Product"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Sample Product</h5>
                                                <h5 class="price-text-color">
                                                    $199.99</h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                                            </p>

                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                                            </p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="{!! url('e-shop/img/landing/dummy_popular_product_2.png') !!}" class="img-responsive" alt="Popular Product"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Product Example</h5>
                                                <h5 class="price-text-color">
                                                    $249.99</h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                                            </p>

                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                                            </p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="{!! url('e-shop/img/landing/dummy_popular_product_3.png') !!}" class="img-responsive" alt="Popular Product"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Next Sample Product</h5>
                                                <h5 class="price-text-color">
                                                    $149.99</h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                                            </p>

                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                                            </p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="{!! url('e-shop/img/landing/dummy_popular_product_4.png') !!}" class="img-responsive" alt="Popular Product"/>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Sample Product</h5>
                                                <h5 class="price-text-color">
                                                    $199.99</h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                                            </p>

                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                                            </p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{!! url('e-shop/img/landing/dummy_popular_product_5.png') !!}" class="img-responsive" alt="Popular Product"/>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Sample Product</h5>
                                            <h5 class="price-text-color">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                                        </p>

                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{!! url('e-shop/img/landing/dummy_popular_product_6.png') !!}" class="img-responsive" alt="Popular Product"/>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Product Example</h5>
                                            <h5 class="price-text-color">
                                                $249.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                                        </p>

                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{!! url('e-shop/img/landing/dummy_popular_product_7.png') !!}" class="img-responsive" alt="Popular Product"/>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Next Sample Product</h5>
                                            <h5 class="price-text-color">
                                                $149.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                                        </p>

                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{!! url('e-shop/img/landing/dummy_popular_product_8.png') !!}" class="img-responsive" alt="Popular Product"/>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Sample Product</h5>
                                            <h5 class="price-text-color">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star"> </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a>
                                        </p>

                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container top-buffer">
        <h3>{!! trans('e_shop.landing.affiliated_companies') !!}</h3>

        <div id="carousel-example" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="row">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12 center-block">
                                <div class="col-item">
                                    <div class="photo">
                                        <a href="https://www.proplan.com/" target="_blank">
                                            <img src="{!! url('e-shop/img/landing/pro_plan.png') !!}" class="img-responsive" alt="Pro Plan Logo"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <a href="http://royalcanin.gr/" target="_blank">
                                            <img src="{!! url('e-shop/img/landing/royal_canin.png') !!}" class="img-responsive" alt="Royal Cannin Logo"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <a href="https://www.purina.com/" target="_blank">
                                            <img src="{!! url('e-shop/img/landing/purina.png') !!}" class="img-responsive" alt="a"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection

@section('inline-scripts')
@endsection