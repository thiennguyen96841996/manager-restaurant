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
                                    <img src="../images/blog-21.jpg" alt="IMG-BLOG">
                                </div>

                                <div class="flex-w how8 p-b-9">
                                    <span class="s1-txt12 p-r-15">
                                        <i class="fa fa-comments cl1 m-r-5"></i>
                                        03 Comment
                                    </span>

                                    <span class="s1-txt12 p-r-15">
                                        <i class="fa fa-eye cl1 m-r-5"></i>
                                        15 Viewer
                                    </span>

                                    <span class="s1-txt12">
                                        <i class="fa fa-calendar cl1 m-r-5"></i>
                                        Dec 16 ,2017
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
                            <div class="flex-str flex-w bor11 m-b-65">
                                <div class="bg-img1 size11 w-full-sm"
                                style="background-image: url('../images/other-02.jpg');"></div>

                                <div class="flex-col-m wsize18 p-t-25 p-b-25 p-l-30 p-r-30 w-full-sm">
                                    <span class="m1-txt8 p-b-11">
                                        Brenda Greene
                                    </span>

                                    <span class="s1-txt13 p-b-9">
                                        “I Love This Food”
                                    </span>

                                    <p class="s1-txt3 p-b-20">
                                        Mauris pellentesque lacus rutrum varius, lectus hendrerit lacus,pulvinar dui ante sit amet nibh. Mauris gravida nunc massa, pulvinar turpis porta cursus. Praesent vel lobortis magna.
                                    </p>

                                    <span class="fs-18 cl1 flex-w">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                            </div>

                            <!--  -->
                            <div class="bor2">
                                <div class="flex-sb-m flex-w">
                                    <div class="flex-w p-t-10 p-b-10 p-r-30">
                                        <span class="s1-txt3 m-r-5">Tags: </span>
                                        
                                        <span class="flex-w m-r-5">
                                            <a href="#" class="s1-txt3 hov-cl1 trans-04">
                                                design
                                            </a>
                                            <span class="s1-txt3">,</span>
                                        </span>
                                        
                                        <span class="flex-w m-r-5">
                                            <a href="#" class="s1-txt3 hov-cl1 trans-04">
                                                food
                                            </a>
                                            <span class="s1-txt3">,</span>
                                        </span>

                                        <span class="flex-w m-r-5">
                                            <a href="#" class="s1-txt3 hov-cl1 trans-04">
                                                chef
                                            </a>
                                        </span>
                                    </div>

                                    <div class="flex-w p-t-10 p-b-10">
                                        <a href="#" class="flex-c-m how-social1 trans-04 m-r-10 m-b-5 m-t-5">
                                            <i class="fa fa-facebook"></i>
                                        </a>

                                        <a href="#" class="flex-c-m how-social1 trans-04 m-r-10 m-b-5 m-t-5">
                                            <i class="fa fa-twitter"></i>
                                        </a>

                                        <a href="#" class="flex-c-m how-social1 trans-04 m-r-10 m-b-5 m-t-5">
                                            <i class="fa fa-google-plus"></i>
                                        </a>

                                        <a href="#" class="flex-c-m how-social1 trans-04 m-b-5 m-t-5">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="p-t-15 p-b-30">
                                    <h5 class="m2-txt8 p-b-35">
                                        Related Articles
                                    </h5>

                                    <div class="row">
                                        <div class="col-sm-6 col-lg-4 p-b-30">
                                            <!-- item event -->
                                            <div class="item-event">
                                                <a href="blog-detail.html" class="wrap-pic-w how-overlay2">
                                                    <img src="../images/blog-24.jpg" alt="IMG-BLOG">
                                                </a>

                                                <div class="p-t-20">
                                                    <h6 class="p-b-12">
                                                        <a href="blog-detail.html" class="m2-txt9 hov-cl1 trans-04">
                                                            Indignation and dislike me. 
                                                        </a>
                                                    </h6>

                                                    <div class="flex-sb-m flex-w">
                                                        <span class="s1-txt14 m-r-20">
                                                            <i class="fa fa-user-circle-o m-r-6"></i>
                                                            by author
                                                        </span>

                                                        <span class="s1-txt2">
                                                            <i class="fa fa-calendar m-r-6"></i>
                                                            Dec 16, 2017
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-4 p-b-30">
                                            <!-- item event -->
                                            <div class="item-event">
                                                <a href="blog-detail.html" class="wrap-pic-w how-overlay2">
                                                    <img src="../images/blog-25.jpg" alt="IMG-BLOG">
                                                </a>

                                                <div class="p-t-20">
                                                    <h6 class="p-b-12">
                                                        <a href="blog-detail.html" class="m2-txt9 hov-cl1 trans-04">
                                                            Demoralized the charms.
                                                        </a>
                                                    </h6>

                                                    <div class="flex-sb-m flex-w">
                                                        <span class="s1-txt14 m-r-20">
                                                            <i class="fa fa-user-circle-o m-r-6"></i>
                                                            by author
                                                        </span>

                                                        <span class="s1-txt2">
                                                            <i class="fa fa-calendar m-r-6"></i>
                                                            Dec 18, 2017
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-4 p-b-30">
                                            <!-- item event -->
                                            <div class="item-event">
                                                <a href="blog-detail.html" class="wrap-pic-w how-overlay2">
                                                    <img src="../images/blog-26.jpg" alt="IMG-BLOG">
                                                </a>

                                                <div class="p-t-20">
                                                    <h6 class="p-b-12">
                                                        <a href="blog-detail.html" class="m2-txt9 hov-cl1 trans-04">
                                                            Through shrinking pain.
                                                        </a>
                                                    </h6>

                                                    <div class="flex-sb-m flex-w">
                                                        <span class="s1-txt14 m-r-20">
                                                            <i class="fa fa-user-circle-o m-r-6"></i>
                                                            by author
                                                        </span>

                                                        <span class="s1-txt2">
                                                            <i class="fa fa-calendar m-r-6"></i>
                                                            Dec 19, 2017
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Comment -->
                            <div class="p-t-50">
                                <h5 class="m2-txt8 p-b-10">
                                    Comments
                                </h5>
                                
                                <!-- item comment -->
                                <div class="p-t-35">
                                    <!-- comment-lv1 -->
                                    <div class="flex-w">
                                        <div class="how-avatar1 m-r-30 m-t-3">
                                            <img src="images/avatar-05.jpg" alt="AVATAR">
                                        </div>

                                        <div class="wsize19 w-full-sm respon6">
                                            <div class="flex-w flex-sb-m p-b-10">
                                                <span class="m1-txt8 p-r-20">
                                                    Douglas Green
                                                </span>

                                                <span class="s1-txt3">
                                                    2 Hour ago
                                                </span>
                                            </div>

                                            <p class="s1-txt3 p-b-17">
                                                There are many variations passages Lorem Ipsum available,ut the majority surealration some fm, injected humour or randomised to passage embarrassing hidden in the middle of facilis est e text voluptas assumenda est, omnis dolor repellendus. 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- item comment -->
                                <div class="p-t-35">
                                    <!-- comment-lv1 -->
                                    <div class="flex-w">
                                        <div class="how-avatar1 m-r-30 m-t-3">
                                            <img src="../images/avatar-07.jpg" alt="AVATAR">
                                        </div>

                                        <div class="wsize19 w-full-sm respon6">
                                            <div class="flex-w flex-sb-m p-b-10">
                                                <span class="m1-txt8 p-r-20">
                                                    Jacob Schmidt
                                                </span>

                                                <span class="s1-txt3">
                                                    1 Hour ago
                                                </span>
                                            </div>

                                            <p class="s1-txt3 p-b-17">
                                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et necessitatibus saepe eveniet.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  -->
                            <div class="p-t-53">
                                <h5 class="m2-txt8 p-b-35">
                                    Don't Forget Comment
                                </h5>

                                <form>
                                    <div class="row">
                                        <div class="col-lg-4 p-b-30">
                                            <div class="size1 bor9">
                                                <input class="size-full s1-txt3 placeholder3 p-l-20 p-r-20" type="text" name="name" placeholder="Your Name">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 p-b-30">
                                            <div class="size1 bor9">
                                                <input class="size-full s1-txt3 placeholder3 p-l-20 p-r-20" type="text" name="email" placeholder="Your Email">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 p-b-30">
                                            <div class="size1 bor9">
                                                <input class="size-full s1-txt3 placeholder3 p-l-20 p-r-20" type="text" name="phone" placeholder="Your Phone">
                                            </div>
                                        </div>

                                        <div class="col-12 p-b-30">
                                            <div class="w-full bor9">
                                                <textarea class="size12 s1-txt3 placeholder3 p-l-20 p-r-20 p-t-16 p-b-10" name="msg" placeholder="Comments"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12 p-t-10">
                                            <button class="flex-c-m s1-txt1 size6 bg1 how-btn1 trans-04">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
