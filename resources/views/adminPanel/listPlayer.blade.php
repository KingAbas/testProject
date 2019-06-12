@extends('adminPanel.layouts.userFront')

@section('body')

    <section id="main-content">
        <section class="wrapper">


            <h2 class="title-section-normal"><span class="tsnl"></span>لیست همه کاربران</h2>


            <div class="messagecenter-box">
                <div class="table-responsive table-center">
                    <div class="table-light">
                        <table class="table table-striped">
                            <thead>
                            <tr align="center">
                                <th scope="col" class="th-img">پروفایل</th>

                                <th scope="col">نام</th>
                                <th scope="col">تیم</th>

                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($player as $item)
                                <tr>
                                    <td><img src="{{asset('images/'.$item->image)}}" alt="" class="profile-avatar"></td>

                                    <td>{{$item->name}}</td>
                                    @if($item->team_id==0)
                                        <td>در هیچ تیمی نیست</td>
                                    @else
                                        <td></td>
                                    @endif
                                    <td>
                                        <a class="bt ba usn min-width-130 show-set">
                                            <span>افزودن به تیم</span>
                                            <i class="fa fa-plus ic"></i>
                                        </a>
                                        <div class="to-set display-none">

                                                @foreach($team as $itemTeam)
                                                    <a href="{{route('transfer',['id'=>$itemTeam->id,'user'=>$item])}}">
                                                        {{$itemTeam->name}}
                                                    </a>
                                                <br>
                                                <br>
                                                @endforeach



                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="sec-pag">
                <ul class="pagination iimn">
                    <li class="active"><a href="#" class="button-active">1</a></li>
                    <li><a href="#" class="button-active">2</a></li>
                    <li><a href="#" class="button-active">3</a></li>
                    <li><a href="#" class="button-active">4</a></li>
                    <li><a href="#" class="button-active">5</a></li>
                    <li class="pag-not"><span>...</span></li>
                    <li><a href="#" class="button-active">120</a></li>
                    <li><a href="#" aria-label="Next" class="button-active"><img src="style/img/pag-left.png"
                                                                                 alt=""></a></li>
                </ul>
                <div class="cpip">
                    <span>تعداد در صفحات : </span>
                    <select name="" class="selectric color-1 col mbhalf">
                        <option value="">20</option>
                        <option value="">30</option>
                        <option value="">40</option>
                        <option value="">50</option>
                    </select>
                </div>
            </div>

        </section>
    </section>

@endsection