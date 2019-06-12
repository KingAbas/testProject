@extends('adminPanel.layouts.userFront')

@section('body')

    <section id="main-content">
        <section class="wrapper">


            <h2 class="title-section-normal"><span class="tsnl"></span>نقل و انتقالات</h2>


            <div class="messagecenter-box">
                <div class="table-responsive table-center">
                    <div class="table-light">
                        <table class="table table-striped">
                            <thead>
                            <tr align="center">


                            <th scope="col">پروفایل</th>

                                <th scope="col">نام بازیکن</th>
                                <th scope="col">نام تیم هایی که بازی میکند</th>
                                <th scope="col">افزودن بازیکن به تیم</th>
                                <th scope="col">عملیات</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($player as $item)
                                <tr>
                                    <td><img src="{{asset('images/'.$item->image)}}" alt="" class="profile-avatar"></td>

                                    <td>{{$item->name}}</td>
                                    <td>



                                    </td>
                                    <td>
                                        <div class="select-normal select-style-one">
                                            <select name="" class="selectric color-1 col">
                                                <option value="">انتخاب </option>
                                              @foreach($team as $item)
                                                <option value="" selected="selected">{{$item->name}}</option>
                                              @endforeach
                                            </select>
                                        </div>

                                    </td>

                                    <td>
                                        <a class="bt ba usn min-width-130 show-set">
                                            <span>نمایش عملیات</span>
                                            <i class="fa fa-plus ic"></i>
                                        </a>
                                        <div class="to-set display-none">

                                            <div>
                                                <a class="bt ba red usn min-width-130">
                                                    <span>حذف</span>
                                                    <i class="fa fa-trash ic"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </section>
    </section>

@endsection