@extends('layouts.app')

@section('content')
    <section class="container">

        <section class="session-container">
            <div style="text-align: center">
                <h1>
                    درخواست شما ثبت شد.
                </h1>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">پس از مدت کوتاهی با شما تماس خواهیم گرفت.</div>
                        <div class="panel-body">
                            <div class="row spaced">
                                <div class="col-sm-3">
                                    <label>نام سازمان یا شرکت</label>
                                    <input disabled type="text" class="form-control col-sm-12" value="{{$data['sponsor_name']}}">
                                </div>
                                <div class="col-sm-3">
                                    <label>نام و نام خانوادگی مدیرعامل یا رابط</label>
                                    <input disabled type="text" class="form-control col-sm-12" value="{{$data['sponsor_person']}}">
                                </div>
                                <div class="col-sm-3">
                                    <label>ایمیل</label>
                                    <input disabled type="text" class="form-control col-sm-12" value="{{$data['sponsor_email']}}">
                                </div>
                                <div class="col-sm-3">
                                    <label>شماره تلفن</label>
                                    <input disabled type="text" class="form-control col-sm-12" value="{{$data['sponsor_phone']}}">
                                </div>
                            </div>
                            <div class="row spaced" >
                                <div class="col-sm-3">
                                    <label>نوع حمایت</label>
                                    <select disabled class="form-control col-sm-12" name="sponsoring_method">
                                        <option value="financial" {{$data['sponsoring_method'] == 'financial' ? 'selected' : ''}}>حمایت مالی از جشنواره</option>
                                        <option value="supplier" {{$data['sponsoring_method'] == 'supplier' ? 'selected' : ''}}>تامین ملزومات جشنواره</option>
                                        <option value="other" {{$data['sponsoring_method'] == 'other' ? 'selected' : ''}}>سایر (نیاز به ذکر توضیح)</option>
                                    </select>
                                </div>
                                <div class="col-sm-9">
                                    <label>توضیحات</label>
                                    <textarea disabled class="form-control col-sm-12" name="description">{!! $data['description'] !!}</textarea><br>
                                </div>
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