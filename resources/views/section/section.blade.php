@extends('layouts.app')

@section('content')
    <section class="container">

        <section class="session-container">
            <div style="text-align: center">
                <h1>
                    {{$section->title}}
                </h1>

                <p>

            <span>
                سطح:
                <label class="label label-danger">{{$section->level}}</label>
            </span>

                    &nbsp;&nbsp;

                <span>
            زمان برگزاری:
            <label class="label label-success">{{$section->time}}</label>
                    </span>

                    &nbsp;&nbsp;

                    @if($section->room)
                        <span>
            محل:
            <label class="label label-info">{{$section->room}}</label>
                    </span>
                    @endif

                </p>


            </div>


            <hr>

            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            @foreach($presenters as $presenter)
                                <div style="text-align: center;">
                                    <a href="{{route('app::presenter',[$presenter->id])}}" class="profile2"
                                       target="_blank">
                                        <img style="max-height: 220px;" src="{{$presenter->avatar}}">
                                        <h2>{{$presenter->name}}</h2>
                                        <h5>{{$presenter->bio}}</h5>
                                    </a>
                                </div>
                                <hr>
                            @endforeach
                            <div class="text-center">
                                <a class="btn btn-success" href="https://eventbin.ir/linuxfest" target="_blank">
                                    <span>هم اکنون ثبت نام کنید</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">توضیحات</div>
                        <div class="panel-body">
                            <p>
                                {!! $section->desc !!}
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </section>

@endsection