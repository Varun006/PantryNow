@extends('layouts.public.main')

@section('extra-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
@stop

@section('title')
    <title>Coming Soon!</title>
@stop

@section('slider')
    <section id="slider" class="slider-parallax swiper_wrapper dark full-screen clearfix"
             {{--style="background: url({{ @asset('images/bg2.jpg') }}) center;"--}}
             >

        <div class="slider-parallax-inner">
            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url({{ @asset('images/bg2.jpg') }});">
                        <div class="container clearfix">
                            {{--<div class="vertical-middle">--}}

                                <div class="heading-block center nobottomborder">
                                    {{--<h1 data-animate="fadeInUp">Sign up to stay updated.</h1>--}}
                                    {{--<span data-animate="fadeInUp" data-delay="300">Sign up to stay updated.</span>--}}
                                </div>

                                <form action="posted" method="post" role="form" class="landing-wide-form clearfix">

                                    {{csrf_field()}}

                                    <div class="col_four_fifth nobottommargin">
                                        <div class="col_full nobottommargin">
                                            <input type="email" class="form-control input-lg not-dark" value="" name="email"
                                                   placeholder="Your Email*" required>
                                        </div>
                                    </div>
                                    <div class="col_one_fifth col_last nobottommargin">
                                        <button class="btn btn-lg btn-danger btn-block nomargin" value="submit" type="submit"
                                                style="">KEEP ME UPDATED
                                        </button>
                                    </div>
                                </form>

                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@stop

@section('extra-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@stop

@section('extra-js')
    @if(session()->has('success'))
        <script>
            $(function() {
                swal("Success!", "We will send you major updates.", "success")
            })
        </script>
    @endif

    @if($errors->count() != 0)
        <script>
            $(function() {
                swal("Error!", "Please fill in your valid details", "error")
            })
        </script>
    @endif
@stop