@extends('adminPanel.layouts.userFront')

@section('body')

    <section id="main-content">
        <section class="wrapper">

            <div class="blacklist-box">
                <form action="{{route('addTeamProduct')}}" method="post">
                    <div class="row">
                        @csrf

                        <div class="col-lg-8 col-md-8 float-right">
                            <div class="panel-card mb-10">
                                <div class="head">
                                    <h2>اضاف کردن تیم</h2>
                                </div>
                                <div class="body nkb nkcp">
                                    <p class="help-text-normal clear-both width100 margin-bottom-20px">
                                        فیلد های زیر را کامل کنید
                                    </p>
                                    <div class="item mb-0">
                                        <label for="" class="label-text-normal">نام تیم : </label>
                                        <input class="data-se input-text-normal" value="{{old('name')}}" name="name" type="text">
                                        @if($errors->has('name'))


                                            <div class="sim-label-box alert-text-yellow">
                                                <p class="help-text-tiny">
                                                    {!! $errors->first('name') !!}
                                                </p>
                                            </div>

                                        @endif
                                    </div>


                                    <hr class="hr-normal">
                                    <div class="item">
                                        <label for="" class="label-text-normal"></label>
                                        <button class="button-green margin-right-10px button-active">ذخیره تغییرات
                                        </button>
                                        <button class="button-grey button-active">انصراف</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>


        </section>
    </section>

@endsection