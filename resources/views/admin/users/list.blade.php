@extends('layouts.app')

@section('content')
    <section class="container">

        <section class="session-container">
            <div style="text-align: center">
                <h1>
                    لیست کاربران
                </h1>
            </div>
            <hr>
            <div class="row">
                @foreach($users as $user)
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                {!! $user->name !!}
                            </div>
                            <div class="panel-body" style="">
                                <div class="col-sm-10">
                                    @if ($user->img)
                                        <a href="#" target="_blank" style="">
                                            <img src="{{ asset($user->img) }}" alt="{!! $user->name !!}" />
                                        </a>
                                    @endif
                                    <p>
                                        نام:
                                        {!! $user->name !!} <br>
                                        ایمیل:
                                        {!! $user->email !!} <br>
                                        شماره تلفن:
                                        {!! $user->mobile !!} <br>
                                        نوع کاربر:
                                        {!! $user->type !!}

                                    </p>
                                </div>
                                <div class="col-sm-offset-11">
                                    <a href="">حذف کاربر</a><br>
                                    <a href="">ویرایش مشخصات</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </section>

    </section>

@endsection