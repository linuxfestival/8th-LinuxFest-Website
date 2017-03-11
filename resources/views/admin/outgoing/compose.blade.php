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
                        <div class="panel-heading">ارسال ایمیل</div>
                        <div class="panel-body">
                            <form action="{{route('admin::mail.send')}}" id="email-form" enctype="multipart/form-data" method="POST">
                                {{csrf_field()}}
                                <div class="row spaced">
                                    <div class="col-sm-12">
                                        <label>آدرس ایمیل</label>
                                        <input type="text" class="form-control col-sm-12" name="to" value="{{isset($to) ? $to : ''}}" style="direction: ltr;">
                                    </div>
                                    <div class="col-sm-12">
                                        <label>عنوان</label>
                                        <input type="text" class="form-control col-sm-12" name="subject">
                                    </div>
                                </div>
                                <div class="row spaced">
                                    <label>متن ایمیل</label>
                                    <textarea class="form-control col-sm-12" name="body" placeholder="متن ایمیل را وارد کنید."></textarea><br>
                                </div>

                                <div class="row text-center">
                                    <button type="submit" class="btn btn-primary btn-lg g-recaptcha"
                                            data-sitekey="6Lf_PxgUAAAAAL_QLZkIHAmFZl80ebXK8b57Un6l"
                                            data-callback="submitting"
                                            data-hl="fa">
                                        <i class="fa fa-check"></i>
                                        ارسال
                                    </button>
                                    <a href="{{route('admin::index')}}">
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
            document.getElementById("email-form").submit();
        }
    </script>
@endsection