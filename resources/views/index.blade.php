@extends('layouts.public.main')

@section('title')
    <title>Pantry Now</title>
@stop

@section('slider')
    <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
        <div class="slider-parallax-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url({{ @asset('images/extras/slider/b1.jpg') }});">
                    </div>

                    <div class="swiper-slide"
                         style="background-image: url({{ @asset('images/extras/slider/b2.jpg') }});">
                    </div>
                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
            </div>

            <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i
                        class="icon-angle-down infinite animated fadeInDown"></i></a>

        </div>
    </section>
@stop

@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="promo promo-light promo-full bottommargin-lg header-stick notopborder">
                <div class="container clearfix">
                    <h3>Get your order delivered within <span>60 minutes</span> <i class="icon-time"></i> </h3>
                    <a href="javascript:void(0);" class="button button-dark button-xlarge button-rounded">Start Shopping</a>
                </div>
            </div>
            <div class="container clearfix">
                <div class="fancy-title center bottommargin">
                    <h2>HOW IT <span>WORKS</span></h2>
                </div>

                <div class="col_one_third nobottommargin">

                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="i-alt">1.</i></a>
                        </div>
                        <h3>Choose a Product.</h3>
                        <p>Perferendis, nam. Eum aperiam vel animi beatae corporis dignissimos, molestias, placeat,
                            maxime optio ipsam nostrum atque quidem.</p>
                    </div>

                </div>

                <div class="col_one_third nobottommargin">

                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="i-alt">2.</i></a>
                        </div>
                        <h3>Enter Shipping Info.</h3>
                        <p>Saepe qui enim at animi. Repellendus, blanditiis doloremque asperiores reprehenderit
                            deleniti. Ipsam nam accusantium ex!</p>
                    </div>

                </div>

                <div class="col_one_third col_last">

                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="i-alt">3.</i></a>
                        </div>
                        <h3>Complete your Payment.</h3>
                        <p>Necessitatibus accusamus, inventore atque commodi, animi architecto ea sed, suscipit tempora
                            ex deleniti quae. Consectetur, sint velit.</p>
                    </div>

                </div>
            </div>
            <div class="fancy-title center bottommargin">
                <h2>MULTIPLE <span>CATEGORIES</span></h2>
            </div>
            <div class="container clearfix">
                <div class="col_one_third nobottommargin">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img src="https://s3.ap-south-1.amazonaws.com/pantrynow-assets/category-thumbs/Breakfast-Dairy.jpg"
                                 style="display: block;">
                        </div>
                    </div>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img src="https://s3.ap-south-1.amazonaws.com/pantrynow-assets/category-thumbs/Drinks.jpg"
                                 style="display: block;">
                        </div>
                    </div>
                </div>

                <div class="col_one_third nobottommargin col_last">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img src="https://s3.ap-south-1.amazonaws.com/pantrynow-assets/category-thumbs/Household.jpg" style="display: block;">
                        </div>
                    </div>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img src="https://s3.ap-south-1.amazonaws.com/pantrynow-assets/category-thumbs/Personal.jpg"
                                 style="display: block;">
                        </div>
                    </div>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img src="https://s3.ap-south-1.amazonaws.com/pantrynow-assets/category-thumbs/Sauces.jpg"
                                 style="display: block;">
                        </div>
                    </div>
                </div>

                <div class="col_one_third nobottommargin col_last">
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            <img src="https://s3.ap-south-1.amazonaws.com/pantrynow-assets/category-thumbs/Snacks.jpg"
                                 style="display: block;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="section topmargin-sm footer-stick">

                <h4 class="uppercase center">What <span>Clients</span> say?</h4>

                <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            <div class="slide">
                                <div class="testi-content">
                                    <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                    <div class="testi-meta">
                                        Steve Jobs
                                        <span>A happy customer.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Collis Ta'eed
                                        <span>A happy customer.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-content">
                                    <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                    <div class="testi-meta">
                                        John Doe
                                        <span>A happy customer.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
