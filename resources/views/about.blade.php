@extends('layouts.public.main')

@section('title')
    <title>About Us</title>
@stop

@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="common-height clearfix">
                    <div id="popular-dest-map" class="col-md-8 col-padding gmap hidden-xs"></div>

                    <div class="col-md-4 col-padding" style="background-color: #F9F9F9;">
                        <div class="max-height clearfix">
                            <div class="heading-block nobottommargin">
                                <h4>We serve at the following locations</h4>
                            </div>
                            <div class="col_half">
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400004</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Charni Road</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">400005</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Colaba/Cuff Parade</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400001</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Fort</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400002</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Marine Drive</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400020</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Churchgate</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400032</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Kala Ghoda</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400021</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Nariman Point</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400007</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Grant Road</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400003</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Bhuelshwar</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400026</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Breach Candy/Peddar Road/ Altamount Road</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400008</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Tardeo/Kamathipura</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400018</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Haji Ali</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col_half col_last">
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400025</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Worli/Prabhadevi</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400028</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Shivaji Park</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400037</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Wadala</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400006</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Walkeshwar/Nepeansea Road</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400011</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Mahalaxmi</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400019</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Matunga</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400012</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Lower Parel</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400034</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Tardeo</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400031</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Wadal</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400027</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Byculla</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="javascript:void(0);">400010</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li><span class="color"></span> Mazgaon</li>
                                        </ul>
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

@section('extra-js')
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
    <script type="text/javascript" src="js/jquery.gmap.js"></script>
    <script type="text/javascript">
        jQuery(window).load(function(){

            jQuery('#popular-dest-map').gMap({
                address: 'Dadar',
                maptype: 'ROADMAP',
                zoom: 12,
                markers: [
                    {
                        address: "Marine Drive, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Churchgate, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Kala Ghoda, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Nariman Point, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Grant Road, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Bhuleshwar, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Peddar Road, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Tardeo, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Haji Ali, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Worli, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Shivaji Park, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Shivaji Park, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Walkeshwar, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Wadala, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Mahalaxmi, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Matunga, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Lower Parel, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Tardeo, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Wadala, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Byculla, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                    {
                        address: "Mazgaon, Mumbai, India",
                        icon: {
                            image: "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [16,36]
                        }
                    },
                ],
                doubleclickzoom: false,
                controls: {
                    panControl: false,
                    zoomControl: true,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    overviewMapControl: false
                },
                styles: [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}]
            });
        });
    </script>
@stop