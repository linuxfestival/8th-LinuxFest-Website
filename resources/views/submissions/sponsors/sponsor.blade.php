@extends('layouts.app')

@section('content')
    <section class="container">

        <section class="session-container">
            <div style="text-align: center">
                <h1>
                    حمایت مالی و معنوی جشنواره
                </h1>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">فرم حمایت از نهمین دوره جشنواره ملی لینوکس و نرم‌افزارهای متن‌باز امیرکبیر</div>
                        <div class="panel-body">
                            <form action="{{route('app::sponsors.submit')}}" id="sponsoring-form" enctype="multipart/form-data" method="POST">
                                {{csrf_field()}}
                                <div class="row spaced">
                                    <div class="col-sm-3">
                                        <label>نام سازمان یا شرکت</label>
                                        <input type="text" class="form-control col-sm-12" name="sponsor_name">
                                    </div>
                                    <div class="col-sm-3">
                                        <label>نام و نام خانوادگی مدیرعامل یا رابط</label>
                                        <input type="text" class="form-control col-sm-12" name="sponsor_person">
                                    </div>
                                    <div class="col-sm-3">
                                        <label>ایمیل</label>
                                        <input type="text" class="form-control col-sm-12" name="sponsor_email">
                                    </div>
                                    <div class="col-sm-3">
                                        <label>شماره تلفن</label>
                                        <input type="text" class="form-control col-sm-12" name="sponsor_phone">
                                    </div>
                                </div>
                                <div class="row spaced" >
                                    <div class="col-sm-12">
                                        <label>نوع حمایت</label>
                                        <select class="form-control col-sm-12" name="sponsoring_method">
                                            <option value="financial">حمایت مالی از جشنواره</option>
                                            <option value="supplier">تامین ملزومات جشنواره</option>
                                            <option value="other">سایر (نیاز به ذکر توضیح)</option>
                                        </select>
                                    </div>
                                    {{--<div class="col-sm-4">--}}
                                        {{--<label>فایل لوگو</label>--}}
                                        {{--<input type="file" accept="image/gif,image/png,image/jpeg" class="form-control col-sm-12" name="logo">--}}
                                    {{--</div>--}}
                                </div>
                                <div class="row spaced">
                                    <label>توضیحات</label>
                                    {{--<textarea class="form-control col-sm-12" name="description" placeholder="لطفا جزییات حمایت و خلاصه‌ای از فعالیت‌های سازمان یا شرکت خود را شرح دهید."></textarea><br>--}}
                                    <textarea class="form-control col-sm-12" name="description" placeholder="لطفا جزییات حمایت و خلاصه‌ای از فعالیت‌های سازمان یا شرکت خود را شرح دهید."></textarea><br>
                                </div>

                                <div class="row text-center">
                                    <button type="submit" class="btn btn-primary btn-lg g-recaptcha"
                                            data-sitekey="6Lf_PxgUAAAAAL_QLZkIHAmFZl80ebXK8b57Un6l"
                                            data-callback="submitting">
                                        <i class="fa fa-check"></i>
                                        ذخیره
                                    </button>
                                    <a href="{{route('app::index')}}">
                                        <button type="button" class="btn btn-primary btn-lg" style="background-color: #858384">
                                            <i class="fa fa-close"></i>
                                            بازگشت
                                        </button>
                                    </a>
                                </div>
                            </form>
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
@section('scripts')
    <script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
    <script type="text/javascript">
        function submitting() {
            document.getElementById("sponsoring-form").submit();
        }
    </script>
@endsection