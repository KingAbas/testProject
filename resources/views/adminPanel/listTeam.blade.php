@extends('adminPanel.layouts.userFront')

@section('body')

    <section id="main-content">
        <section class="wrapper">


            <h2 class="title-section-normal"><span class="tsnl"></span>لیست همه تیم ها</h2>


            <div class="messagecenter-box">
                <div class="table-responsive table-center">
                    <div class="table-light">
                        <table class="table table-striped">
                            <thead>
                            <tr align="center">



                                <th scope="col">نام تیم</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($team as $item)
                                <tr>


                                    <td>{{$item->name}}</td>


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