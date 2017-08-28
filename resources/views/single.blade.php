@extends('layouts.public.main')

@section('extra-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
@stop

@section('title')
    <title>Shop</title>
@stop

@section('page-title')
    <section id="page-title">
        <div class="container clearfix">
            <h1>{{ $product['name'] }}</h1>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">{{ $product['name']}}</li>
            </ol>
        </div>
    </section>
@stop

@section('content')
    <section id="content">

        <div class="content-wrap">
            <div class="container clearfix">
                <div class="single-product">

                    <div class="product">

                        <div class="col_two_fifth">

                            <!-- Product Single - Gallery
                            ============================================= -->
                            <div class="product-image">
                                <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                    <div class="flexslider">
                                        <div class="slider-wrap" data-lightbox="gallery">
                                            <div class="slide" data-thumb="{{ $product['photo_url'] }}"><a
                                                        href="{{ $product['photo_url'] }}"
                                                        title="{{ $product['name'] }}" data-lightbox="gallery-item"><img
                                                            src="{{ $product['photo_url'] }}"
                                                            alt="{{ $product['name'] }}"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Product Single - Gallery End -->

                        </div>

                        <div class="col_two_fifth product-desc">

                            <!-- Product Single - Price
                            ============================================= -->
                            <div class="product-price">
                                @if(!empty($product['strikeThroughPrice']))
                                    <del>{{ $product['strikeThroughPrice'] }}</del>
                                @endif
                                <ins>{{ $product['price'] }} INR</ins>
                            </div><!-- Product Single - Price End -->
                            <div class="clear"></div>
                            <div class="line"></div>

                            <!-- Product Single - Quantity & Cart Button
                            ============================================= -->
                            <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'
                                  @submit.prevent="send">
                                <cart :product="{{ $product['id'] }}"></cart>
                                <a href="/cart">
                                    <button type="button" class="add-to-cart button nomargin"
                                    >Checkout
                                    </button>
                                </a>
                            </form>

                            <login-modal></login-modal>

                            @if(str_contains(session()->get('_previous')['url'] , 'login'))
                                <logged-in-modal></logged-in-modal>
                            @endif

                            <div class="clear"></div>
                            <div class="line"></div>

                            <!-- Product Single - Short Description
                            ============================================= -->
                            <p class="margin">
                                {!! $product['description'] !!}
                            </p>

                            <!-- Product Single - Meta
                            ============================================= -->
                            <div class="panel panel-default product-meta">
                                <div class="panel-body">
                                    {{--<span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">8465415</span></span>--}}
                                    <span class="posted_in">Category: <a href="javascript:void(0);"
                                                                         rel="tag">{{ $product['categoryName'] }}</a></span>
                                    <span class="posted_in">Sub Category: <a href="javascript:void(0);"
                                                                             rel="tag">{{ $product['subCategoryName'] }}</a></span>
                                </div>
                            </div><!-- Product Single - Meta End -->

                            <!-- Product Single - Share
                            ============================================= -->
                            <div class="si-share noborder clearfix">
                                <span>Share:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                </div>
                            </div><!-- Product Single - Share End -->

                        </div>

                        <div class="col_one_fifth col_last">

                            {{--<div class="divider divider-center"><i class="icon-circle-blank"></i></div>--}}

                            <div class="feature-box fbox-plain fbox-dark fbox-small">
                                <div class="fbox-icon">
                                    <i class="icon-thumbs-up2"></i>
                                </div>
                                <h3>100% Original</h3>
                                <p class="notopmargin">We guarantee you the sale of Original Brands.</p>
                            </div>

                            <div class="feature-box fbox-plain fbox-dark fbox-small">
                                <div class="fbox-icon">
                                    <i class="icon-credit-cards"></i>
                                </div>
                                <h3>Payment Options</h3>
                                <p class="notopmargin">We accept Visa, MasterCard and COD.</p>
                            </div>

                            <div class="feature-box fbox-plain fbox-dark fbox-small">
                                <div class="fbox-icon">
                                    <i class="icon-truck2"></i>
                                </div>
                                <h3>Free Shipping</h3>
                                <p class="notopmargin">Free Delivery to 50+ pincodes on orders above 200 INR.</p>
                            </div>

                        </div>

                    </div>

                </div>

                @include('relatedProducts')

            </div>
        </div>
    </section>
@stop
