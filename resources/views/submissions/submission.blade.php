@extends('layouts.app')

@section('content')
    <section class="container">

        <section class="session-container">
            <div style="text-align: center">
                <h1>
                    ارسال پاسخ فراخوان همکاری
                </h1>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">پاسخ به فراخوان</div>
                        <div class="panel-body">
                            <form action="{{route('app::submission.submit')}}" enctype="multipart/form-data" method="POST">
                                {{csrf_field()}}
                                نام و نام خانوادگی
                                <input type="text" class="form-control col-sm-12" name="attendance"> <br>
                                موضوع مورد نظر
                                <input type="text" class="form-control col-sm-12" name="subject"> <br>
                                چکیده
                                <textarea cols="10" rows="10" class="form-control col-sm-12" name="abstract">
                                </textarea><br>
                                رزومه
                                {{--<input type="file" class="form-control col-sm-12" name="resume"> <br>--}}
                                توضیحات
                                <textarea class="form-control col-sm-12" name="description" placeholder="لطفا نوع ارائه خود را مشخص کنید.">
                                </textarea><br>

                                <button type="submit" class="btn-block">
                                    ذخیره درخواست
                                </button>

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