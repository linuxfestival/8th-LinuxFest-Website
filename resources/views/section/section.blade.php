@extends('layout.app')

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

                <span>
            محل:
            <label class="label label-info">{{$section->room}}</label>
                    </span>

                </p>


            </div>


            <hr>

            <div class="row">
                <div class="col-md-3">
                    <div style="text-align: center;">
                        <a href="{{route('app::presenter',[$presenter->id])}}" class="profile2" target="_blank">
                            <img style="max-height: 220px;" src="{{$presenter->avatar}}">
                            <h2>{{$presenter->name}}</h2>
                            <h5>{{$presenter->bio}}</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                        {!! $section->desc !!}
                    </p>
                </div>
            </div>

        </section>

    </section>

@endsection