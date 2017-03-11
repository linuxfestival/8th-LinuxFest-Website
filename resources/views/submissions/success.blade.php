@extends('layouts.app')

@section('content')
    <section class="container">

        <section class="session-container">
            <div style="text-align: center">
                <h1>
                    از همکاری شما سپاسگزاریم!
                </h1>
            </div>
            <hr>
            @if (count($errors) > 0)
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
                        <div class="panel-heading">
                            <i class="fa fa-check-circle" style="color: Green;"></i>

                            پاسخ شما با موفقیت ثبت گردید.
                        </div>
                        <div class="panel-body">
                            <div class="row spaced">
                                <div class="col-sm-4">
                                    <label>نام و نام خانوادگی</label>
                                    <input disabled type="text" class="form-control col-sm-12" name="attendance[name]" value="{{$data['attendance']['name']}}">
                                </div>
                                <div class="col-sm-4">
                                    <label>شماره تماس</label>
                                    <input disabled type="text" class="form-control col-sm-12" name="attendance[phone]" value="{{$data['attendance']['phone']}}">
                                </div>
                                <div class="col-sm-4">
                                    <label>ایمیل</label>
                                    <input disabled type="text" class="form-control col-sm-12" name="attendance[email]" value="{{$data['attendance']['email']}}">
                                </div>
                            </div>
                            <div class="row spaced" >
                                <div class="col-sm-12">
                                    <label>عنوان موضوع مورد نظر</label>
                                    <input disabled type="text" class="form-control col-sm-12" name="subject" value="{{$data['subject']}}">
                                </div>
                            </div>
                            <div class="row spaced">
                                <label>توضیحات</label>
                                <textarea disabled class="form-control col-sm-12" name="description" placeholder="لطفا نوع ارائه خود را مشخص کنید.">{{$data['description']}}</textarea><br>
                            </div>

                            <div class="row text-center">
                                <a href="{{route('app::index')}}">
                                    <button type="button" class="btn btn-primary btn-lg" style="background-color: #858384">
                                        <i class="fa fa-close"></i>
                                        بازگشت
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </section>

@endsection