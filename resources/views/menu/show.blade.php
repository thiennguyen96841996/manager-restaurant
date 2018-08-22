@extends('master')
@section('title','product')
@section('content')
    <!-- Title page -->
    <section class="bg-img1 flex-col-c-m hsize9 bg-overlay3 p-l-15 p-r-15 p-t-35 p-b-35" style="background-image: url('../images/bg-23.jpg');">
        <h2 class="l2-txt11 txt-center wsize20 p-b-22 respon8">
            {{ $product->name }}
        </h2>

        <div class="flex-w flex-c-m p-b-10">
            <span>
                <a href="index.html" class="m1-txt4 hov-cl1">
                    Home
                </a>
                <span class="m1-txt5 m-r-6 m-l-1">/</span>
            </span>

            <span>
                <a href="blog-list.html" class="m1-txt4 hov-cl1">
                    Product
                </a>
                <span class="m1-txt5 m-r-6 m-l-1">/</span>
            </span>

            <span class="m1-txt5">
                {{ $product->name }}
            </span>
        </div>
    </section>

    
    <!-- Blog detail-->
    <section class="sec-blog-detail bg0 p-t-100 p-b-30">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-9 p-b-30">
                    <div class="p-r-30 p-r-0-lg">
                        <!-- content blog-->
                        <div class="content-blog p-b-58">
                            <!--  -->
                            <div class="how8-parent">
                                <div class="wrap-pic-w">
                                    <div class="wsize17 p-l-10 p-r-10 p-t-10 p-b-10 respon3">
                                        <!-- Slide3 -->
                                        <div class="wrap-slick5">
                                            <div class="slick5">
                                                @foreach($product->images as $image)
                                                <div class="item-slick5 hsize8 respon5">
                                                    <a class="dis-block bg-img1 size-full how-overlay1" href="../assets/images/products/{{ $image->name }}" data-lightbox="gallery"
                                                    style="background-image: url('../assets/images/products/{{ $image->name }}')"></a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-w how8 p-b-9">
                                    <span class="s1-txt12 p-r-15">
                                        <i class="fa fa-comments cl1 m-r-5"></i>
                                        {{ $product->comments->count() }} Comments
                                    </span>
                                </div>
                            </div>
                                
                            <div class="p-t-38 p-b-20">
                                <h4 class="p-b-28 l2-txt10">
                                    {{ $product->name }}
                                </h4>

                                <p class="s1-txt3 p-b-20">
                                    {{ $product->describe }}
                                </p>
                            </div>

                            <!--  -->
                            <div class="bor2">

                                <div class="p-t-15 p-b-30">
                                    <h5 class="m2-txt8 p-b-35">
                                        Same Food
                                    </h5>

                                    <div class="row">
                                        @foreach($sames as $value)
                                        <div class="col-sm-6 col-lg-4 p-b-30">
                                            <!-- item event -->
                                            <div class="item-event">
                                                <a href="{{ route('menu.product', $value->id) }}" class="wrap-pic-w how-overlay2">
                                                    <img src="../images/blog-24.jpg" alt="IMG-BLOG">
                                                </a>

                                                <div class="p-t-20">
                                                    <h6 class="p-b-12">
                                                        <a href="{{ route('menu.product', $value->id) }}" class="m2-txt9 hov-cl1 trans-04">
                                                            {{ $value->name }}
                                                        </a>
                                                    </h6>

                                                    <div class="flex-sb-m flex-w">
                                                        <span class="s1-txt14 m-r-20">
                                                            <i class="fa fa-user-circle-o m-r-6"></i>
                                                            {{ $value->describe }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Comment -->
                            <div id="comments" class="p-t-50">
                                <h5 class="m2-txt8 p-b-10">
                                    Comments
                                </h5>
                                <h3 id="comments-title"></h3>
                                <!-- item comment -->
                                <div class="p-t-35" id="display-comment">
                                </div>
                            </div>

                            <!--  -->
                            <div class="p-t-53">
                                <h5 class="m2-txt8 p-b-35">
                                    Don't Forget Comment
                                </h5>

                                {{ Form::open(['method' => 'POST', 'id' => 'comment_form', 'route' => 'comment.add']) }}
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4 p-b-30">
                                            <div class="size1 bor9">
                                                {{ Form::text('name', null, ['id' => 'name', 'class' => 'size-full s1-txt3 placeholder3 p-l-20 p-r-20', 'placeholder' => 'Your Name', 'autocomplete' => 'off', 'onfocus' => 'this.value=\'\'']) }}
                                            </div>
                                        </div>

                                        <div class="col-lg-4 p-b-30">
                                            <div class="size1 bor9">
                                                {{ Form::text('email', null, ['id' => 'email', 'class' => 'size-full s1-txt3 placeholder3 p-l-20 p-r-20', 'placeholder' => 'Your Email', 'autocomplete' => 'off', 'onfocus' => 'this.value=\'\'']) }}
                                            </div>
                                        </div>

                                        <div class="col-lg-4 p-b-30">
                                            <div class="size1 bor9">
                                                {{ Form::text('phone', null, ['id' => 'phone', 'class' => 'size-full s1-txt3 placeholder3 p-l-20 p-r-20', 'placeholder' => 'Your Phone', 'autocomplete' => 'off', 'onfocus' => 'this.value=\'\'']) }}
                                            </div>
                                        </div>

                                        <div class="col-12 p-b-30">
                                            <div class="w-full bor9">
                                                {{ Form::textarea('content', null, ['id' => 'content', 'class' => 'size12 s1-txt3 placeholder3 p-l-20 p-r-20 p-t-16 p-b-10', 'placeholder' => 'Comments', 'autocomplete' => 'off', 'onfocus' => 'this.value=\'\'']) }}
                                            </div>
                                        </div>
                                        {{ Form::hidden('post_id', $product->id, ['id' => 'post_id']) }}
                                        {{ Form::hidden('post_type', 'App\Product', ['id' => 'post_type']) }}

                                        <div class="col-12 p-t-10">
                                            {{ Form::submit( __('Submit'), ['name' => 'submit', 'id' => 'submit', 'class' => 'flex-c-m s1-txt1 size6 bg1 how-btn1 trans-04']) }}
                                        </div>
                                    </div>
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-4 col-lg-3 p-b-30">
                    <div class="sidebar p-b-50">

                        <!-- Categories -->
                        <div class="p-b-55">
                            <h4 class="m2-txt8 p-b-26">
                                Categories
                            </h4>

                            <ul>
                                <li class="bor9 m-b-9">
                                    <a href="#" class="flex-sb-m flex-w s1-txt11 hov-cl1 trans-04 p-t-11 p-b-11 p-l-20 p-r-20">
                                        Healthy Food
                                        <span class="fs-16">+</span>
                                    </a>                                    
                                </li>

                                <li class="bor9 m-b-9">
                                    <a href="#" class="flex-sb-m flex-w s1-txt11 hov-cl1 trans-04 p-t-11 p-b-11 p-l-20 p-r-20">
                                        Lunch Food
                                        <span class="fs-16">+</span>
                                    </a>                                    
                                </li>

                                <li class="bor9 m-b-9">
                                    <a href="#" class="flex-sb-m flex-w s1-txt11 hov-cl1 trans-04 p-t-11 p-b-11 p-l-20 p-r-20">
                                        Event
                                        <span class="fs-16">+</span>
                                    </a>                                    
                                </li>

                                <li class="bor9 m-b-9">
                                    <a href="#" class="flex-sb-m flex-w s1-txt11 hov-cl1 trans-04 p-t-11 p-b-11 p-l-20 p-r-20">
                                        Vegan
                                        <span class="fs-16">+</span>
                                    </a>                                    
                                </li>
                            </ul>
                        </div>
                        
                        <!--  -->
                        <div> 
                            <a href="#" class="wrap-pic-w pos-relative">
                                <img src="../images/other-01.jpg" alt="IMG">

                                <div class="flex-b ab-t-l size-full m1-txt7 p-l-30 p-r-30 p-t-35 p-b-35">
                                    Your Ad Here
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('[name="_token"]').attr('content')
        }
    });
    $(document).ready(function() {
        $('#comment_form').on('submit', function(event) {
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url: "{{ url('comment/store') }}",
                method: 'POST',
                data: form_data,
                dataType: 'JSON',
                success: function(data)
                {
                    load_comment();
                    $('#comment_form')[0].reset();
                }
            })
        });
        load_comment();
        function load_comment()
        {
            var i;
            var html = '';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('comment/fetch') }}",
                data:
                    {
                        post_id: $('#post_id').val(),
                        post_type: $('#post_type').val(),

                    },
                method: 'POST',
                dataType: 'JSON',
                success: function(data)
                {
                    //0 = email
                    //1 = created_at
                    //2 = content
                    //3 = comment_id
                    console.log(data);
                    $('#comments-title').html('<span>'+ data.length + '</span> Comments');
                    for (i = 0; i < data.length; i++) {
                        html += '<div class="flex-w">' +
                            '<div class="how-avatar1 m-r-30 m-t-3">' +
                            '<img src="../assets/images/avatars/default-avatar.png" alt="AVATAR">' +
                            '</div>' +
                            '<div class="wsize19 w-full-sm respon6">' +
                            '<div class="flex-w flex-sb-m p-b-10">' +
                            '<span class="m1-txt8 p-r-20">' + data[i][0] + '</span>' +
                            '<span class="s1-txt3">' + data[i][1] + '</span>' + 
                            '</div>' +
                            '<p class="s1-txt3 p-b-17">' + data[i][2] + '</p>' +
                            '<a id="display-reply-' + data[i][3] + '"class="flex-w s1-txt3 hov-cl1 trans-04 icon-reply">' +
                            '<i class="fa fa-mail-forward fs-18 cl1 m-t-3 m-r-10"></i>' +
                            'Reply</a>' +
                            '</div>' +
                            '</div>';
                    }
                    $('#display-comment').html(html);
                }
            })
        }
    });
</script>
@endsection
