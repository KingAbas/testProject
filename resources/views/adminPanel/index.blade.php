@extends('adminPanel.layouts.userFront')

@section('body')

    <section id="container">



        <!--Content Start-->
        <section id="main-content">
            <section class="wrapper">

                <h2 class="title-section-normal">فعالیت های من<span>سه شنبه 28 فروردین 1397</span></h2>

                <div class="boxinthcol">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a href="PurchaseFirst.html" class="inthcol butorg button-active">خرید</a>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a href="" class="inthcol butred button-active">فروش</a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <a href="AuctionList.html" class="inthcol butgre button-active">مزایده</a>
                        </div>
                    </div>
                </div>


                <div class="boxintcol">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="intcol">
                                تعداد کالاهای موجود<span>1500</span></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="intcol">
                                قیمت کالاهای موجود (تومان)<span>2500</span></div>
                        </div>
                    </div>
                </div>

                <div class="boxintfor">
                    <div class="row state-overview">
                        <div class="col-lg-3 col-sm-6">
                            <section class="panel">
                                <div class="symbol blue">
                                    <i class="fa fa-clone color_orange"></i>
                                </div>
                                <div class="value">
                                    <h1>22</h1>
                                    <p>کاربری</p>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <section class="panel">
                                <div class="symbol blue">
                                    <i class="fa fa-shopping-cart color_orange"></i>
                                </div>
                                <div class="value">
                                    <h1>140</h1>
                                    <p>فروش</p>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <section class="panel">
                                <div class="symbol blue">
                                    <i class="fa fa-hourglass-half color_orange"></i>
                                </div>
                                <div class="value">
                                    <h1>345</h1>
                                    <p>تخفیف</p>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <section class="panel">
                                <div class="symbol blue">
                                    <i class="fa fa-gavel color_orange"></i>
                                </div>
                                <div class="value">
                                    <h1>500</h1>
                                    <p>مزایده</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>







            </section>
        </section>
        <!--Content End-->

    </section>


    @endsection