@extends('layouts.app')

@section('content')
    <section class="container">

        <section class="session-container">
            <div style="text-align: center">
                <h1>
                    همکاری با جشنواره
                </h1>
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
                        <div class="panel-heading">پاسخ به فراخوان</div>
                        <div class="panel-body">
                            <form action="{{route('app::submission.submit')}}" id="submission-form" enctype="multipart/form-data" method="POST">
                                {{csrf_field()}}
                                <div class="row spaced">
                                    <div class="col-sm-4">
                                        <label>نام و نام خانوادگی</label>
                                        <input type="text" class="form-control col-sm-12" name="attendance_name">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>شماره تماس</label>
                                        <input type="text" class="form-control col-sm-12" name="attendance_phone">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>ایمیل</label>
                                        <input type="text" class="form-control col-sm-12" name="attendance_email">
                                    </div>
                                </div>
                                <div class="row spaced" >
                                    <div class="col-sm-8">
                                        <label>عنوان موضوع مورد نظر</label>
                                        <input type="text" class="form-control col-sm-12" name="subject">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>فایل رزومه (فرمت قابل قبول: pdf)</label>
                                        <input type="file" accept="application/pdf" class="form-control col-sm-12" name="resume">
                                    </div>
                                </div>
                                <div class="row spaced">
                                    <div class="col-sm-8">
                                        <label>چکیده (می‌توانید به صورت فایل با پسوند pdf و یا به صورت متن ارسال نمایید)</label>
                                        <textarea class="form-control col-sm-12" name="abstract" placeholder="چکیده خود را تایپ کنید"></textarea>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>فایل چکیده (فرمت قابل قبول: pdf)</label>
                                        <input type="file" accept="application/pdf" class="form-control col-sm-12" name="abstract-file">
                                    </div>
                                </div>
                                <div class="row spaced">
                                    <label>توضیحات</label>
                                    <textarea class="form-control col-sm-12" name="description" placeholder="لطفا نوع ارائه خود را مشخص کنید."></textarea><br>
                                </div>

                                <div class="row text-center">
                                    <button type="submit" class="btn btn-primary btn-lg g-recaptcha"
                                            data-sitekey="6Lf_PxgUAAAAAL_QLZkIHAmFZl80ebXK8b57Un6l"
                                            data-callback="submitting"
                                            data-hl="fa">
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
            document.getElementById("submission-form").submit();
        }
    </script>
@endsection