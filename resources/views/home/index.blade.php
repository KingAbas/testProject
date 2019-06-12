@extends('home.layouts.userFront')

@section('body')

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->



    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/slider-1.jpg">
                <div class="hs-text">
                    <div style="text-align: right" class="container">
                        <h2>پنل <span>مدیریت </span> بازی</h2>
                        <p>با این پنل شما میتوانید بازیکن ها <br>  را مدیریت کنید و تمامی تیم ها  <br>مشاهده کنید.</p>
                        <a href="{{route('login')}}" class="site-btn">ورود به پنل</a>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/slider-2.jpg">
                <div class="hs-text">
                    <div style="text-align: right" class="container">
                        <h2>پنل <span>مدیریت </span> بازی</h2>
                        <p>با این پنل شما میتوانید بازیکن ها <br>  را مدیریت کنید و تمامی تیم ها  <br>مشاهده کنید.</p>
                        <a href="{{route('login')}}" class="site-btn">ورود به پنل</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Latest news section -->
       <!-- Feature section -->


    @endsection