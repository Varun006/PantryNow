@extends('layouts.public.main')

@section('title')
    <title>Categories</title>
@stop

@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <!-- Post Content
					============================================= -->
                <div class="postcontent nobottommargin col_last">
                    <category-products :products-category="{{ $products }}"></category-products>
                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <filters :category="{{ $category }}" :sub-category="{{ $subCategory }}"></filters>
                <!-- .sidebar end -->
            </div>
        </div>
    </section>
@stop

@section('extra-js')
    <script>
        jQuery(document).ready(function ($) {
//            $('#shop').isotope({
//                transitionDuration: '0.65s',
//                getSortData: {
//                    name: '.product-title',
//                    price_lh: function (itemElem) {
//                        if ($(itemElem).find('.product-price').find('ins').length > 0) {
//                            var price = $(itemElem).find('.product-price ins').text();
//                        } else {
//                            var price = $(itemElem).find('.product-price').text();
//                        }
//
//                        priceNum = price.split("$");
//
//                        return parseFloat(priceNum[1]);
//                    },
//                    price_hl: function (itemElem) {
//                        if ($(itemElem).find('.product-price').find('ins').length > 0) {
//                            var price = $(itemElem).find('.product-price ins').text();
//                        } else {
//                            var price = $(itemElem).find('.product-price').text();
//                        }
//
//                        priceNum = price.split("$");
//
//                        return parseFloat(priceNum[1]);
//                    }
//                },
//                sortAscending: {
//                    name: true,
//                    price_lh: true,
//                    price_hl: false
//                }
//            });
//
//            $('.custom-filter:not(.no-count)').children('li:not(.widget-filter-reset)').each(function () {
//                var element = $(this),
//                    elementFilter = element.children('a').attr('data-filter'),
//                    elementFilterContainer = element.parents('.custom-filter').attr('data-container');
//
//                elementFilterCount = Number(jQuery(elementFilterContainer).find(elementFilter).length);
//
//                element.append('<span>' + elementFilterCount + '</span>');
//
//            });
//
//            $('.shop-sorting li').click(function () {
//                $('.shop-sorting').find('li').removeClass('active-filter');
//                $(this).addClass('active-filter');
//                var sortByValue = $(this).find('a').attr('data-sort-by');
//                $('#shop').isotope({sortBy: sortByValue});
//                return false;
//            });
        });
    </script>
@stop