@extends('layouts.app')

@section('content')
    <section class="container">
        <section class="session-container">
            <div style="text-align: center">
                <h1>
                    لیست پاسخ‌ها
                </h1>
            </div>
            <hr>
            <div class="row">
                @foreach($subs->sortBy('subject') as $sub)
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="col-sm-10">
                                    {!! $sub->subject !!}
                                </div>
                                <div class="col-sm-offset-10">
                                    {{$sub->created_at}}
                                </div>
                            </div>
                            <div class="panel-body" style="">
                                <div class="col-sm-10">
                                    <b>نام و نام خانوادگی:</b> {{$sub->attendance_name}} <br>
                                    <b>ایمیل:</b> {{$sub->attendance_email}} <br>
                                    <b>شماره تماس:</b> {{$sub->attendance_phone}} <br>
                                    <b>چکیده:</b> {{$sub->abstract}} <br>
                                    <b>توضیحات:</b> {{$sub->description}} <br>
                                </div>
                                <div class="col-sm-offset-11">
                                    <a href="">ارسال ایمیل</a><br>
                                    <a href="">مشاهده رزومه</a><br>
                                    @if($sub->abstract_file != null)
                                    <a href="">مشاهده فایل چکیده</a><br>
                                    @endif
                                    <a href="">ویرایش</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </section>
@endsection