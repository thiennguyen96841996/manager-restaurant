@extends('master')
@section('title','Menu')
@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center bg-overlay3 p-l-15 p-r-15 p-t-92 p-b-102" style="background-image: url('images/bg-menu-06.jpg');">
        <h2 class="l2-txt5 txt-center p-b-15 respon8">
            Menu trong ngày
        </h2>

        <div class="flex-w flex-c-m">
            <span>
                <a href="index.html" class="m1-txt4 hov-cl1">
               
                </a>
                <span class="m1-txt5 m-r-6 m-l-1"></span>
            </span>

            <span class="m1-txt5">
        
            </span>
        </div>
    </section>

   @foreach ($categories as $value)
    <!-- Menu Appetizer -->
    <section class="sec-appetizer bg0 p-t-90 p-b-90">
        <div class="container">
            <div class="p-b-58">
                <h3 class="l2-txt7 txt-center p-b-4 respon8">
                    {{ $value->name }}
                </h3>

                <p class="m3-txt1 txt-center">
                    Thử và cảm nhận 
                </p>
            </div>

            <div class="row">
                @foreach ($value->products as $product)
                <div class="col-md-10 col-lg-6">
                    <div class="p-r-30 p-r-0-lg">
                        <!-- Block4 -->
                       
                        <div class="block4 flex-w p-b-30">
                            <div class="block4-pic">
                                <a href="{{ route('menu.product', $product->id) }}">
                                    <img src="{{ asset(config('app.link_product') . $product->getImage($product->id)->name) }}" alt="IMG-MENU">
                                </a>
                            </div>

                            <div class="block4-txt flex-col-m">
                                <div class="dis-flex">
                                    <a href="#" class="block4-txt-name m2-txt7 trans-03">
                                        {{ $product->name }}
                                    </a>

                                    <div class="wsize11 fs-18 block4-txt-lineconnect">                  
                                    </div>

                                    <span class="block4-txt-more m2-txt6 trans-05">
                                        {{ $product->price }} {{ __('$') }}
                                    </span>
                                </div>

                                <p class="s1-txt3 p-t-12 p-b-5 p-r-42">
                                    {{ $product->describe }}
                                </p>
                            </div>  
                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <div class="parallax100 p-t-200 p-b-200" style="background-image: url('images/bg-15.jpg');">
    </div>
    @endforeach

@endsection
