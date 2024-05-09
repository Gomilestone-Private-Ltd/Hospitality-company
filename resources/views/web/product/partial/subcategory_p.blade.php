<div class="row">
    @if (count($getProducts))
        @foreach ($getProducts as $getProduct)
            <div class="col-md-4 col-sm-6 col-6">
                <div class="our-product-right-img-box">
                    <img class="our-product-img"
                        src="{{ asset($getProduct->gen_image[0] ?? 'assets/web/image/guest-room/guest-room-img.png') }}"
                        alt="image">
                    <a href="{{ url('/product') }}/{{ $getProduct->meta_url ?? '' }}/{{ $getProduct->slug ?? '' }}"
                        class="our-product-text">{{ $getProduct->name ?? '' }}</a>
                </div>
            </div>
        @endforeach
    @endif
</div>
