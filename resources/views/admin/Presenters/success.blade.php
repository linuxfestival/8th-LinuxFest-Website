@extends('layouts.app')

@section('content')
    <section class="container">

        <section class="session-container">
            <div style="text-align: center">

                    ارائه دهنده شما با موفقیت ثبت شد

            </div>
            <hr>
        @if(count($errors->all()) > 0)
            <!-- Form Error List -->
                <div class="alert alert-danger">
                    <strong>Whoops! Something went wrong!</strong>

                    <br><br>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">فرم افزودن ارائه دهنده به نهمین دوره جشنواره ملی لینوکس و نرم‌افزارهای متن‌باز امیرکبیر</div>
                        <div class="panel-body">


                                <div class="row spaced">
                                    <div class="col-sm-3">
                                        <label>نام و نام خانوادگی ارائه دهنده</label>
                                        <input  disabled type="text" class="form-control col-sm-12" value="{{$data['presenter_name']}}" >
                                    </div>
                                    <div class="col-sm-3">
                                        <label>آدرس سایت شخصی</label>
                                        <input disabled type="text" class="form-control col-sm-12"  value="{{$data['presenter_url']}}" >
                                    </div>
                                    <div class="col-sm-3">
                                        <label>ایمیل</label>
                                        <input  disabled type="text" class="form-control col-sm-12"  value="{{$data['presenter_email']}}">
                                    </div>
                                    <div class="col-sm-3">
                                        <label>شماره تلفن</label>
                                        <input disabled type="text" class="form-control col-sm-12" value="{{$data['presenter_phone']}}">
                                        <br>
                                    </div>
                                </div>
                                <div class="row spaced" >

                                    <div class="col-sm-4">
                                        <label>افزودن عکس پروفایل</label>
                                        <input disabled type="file"  class="form-control col-sm-12" value="{{$data['presenter_avatar']}}">

                                    </div>
                                </div>
                                <div class="row spaced">
                                    <label>مشخصات</label>
                                    <textarea disabled class="form-control col-sm-12"  >{{$data['presenter_bio']}}</textarea><br>
                                </div>

                                    <a href="{{route('admin::presenters')}}">
                                        <button type="button" class="btn btn-primary btn-lg" style="background-color: #858384">
                                            <i class="fa fa-close"></i>
                                            بازگشت
                                        </button>
                                    </a>
                                </div>

                            {{--{{ Form::open(['route' => 'message.store', 'files' => true]) }}--}}
                            {{--{{ Form::textarea('desc', null, ['id' => 'form-textarea', 'placeholder' => 'توضیحات']) }}--}}
                            {{--{{ Form::file('img', ['class' => 'form-file']) }}--}}
                            {{--{{ Form::submit('Save Message', ['class' => 'btn btn-primary btn-xl']) }}--}}
                            {{--{{ Form::close() }}--}}
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </section>

@endsection
