<div class="col_full nobottommargin">

    <h4 class="center">
        Related Products
    </h4>

    <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false"
         data-autoplay="5000" data-items-xxs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

        @foreach($related as $product)
            <div class="oc-item">
                <div class="product iproduct clearfix">
                    <div class="product-image">
                        <a href="/products/{{ $product->slug }}"><img src="{{ $product->photo_url }}"
                                                                      alt="{{ $product->name }}"></a>
                    </div>
                    <div class="product-desc center">
                        <div class="product-title">
                            <h3><a href="/products/{{ $product->slug }}">{{ $product->name }}</a></h3>
                        </div>
                        <div class="product-price">
                            @if($product->strikeThroughPrice)
                            <del>{{ $product->strikeThroughPrice }}</del>
                            @endif
                            <ins>{{ $product->price }} INR</ins>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
