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
                <?php
                $count = count($presenters);
                $i = $count/12;
                if ($i < 3)
                    $i = 3;
                if ($i == 1)
                    ?>
            </div>
                <div class="col-md-{{$i}}">
                    <div style="text-align: center;">
                        <a href="{{route('app::presenter',[$presenter->id])}}" class="profile2" target="_blank">
                            <img style="max-height: 220px;" src="{{$presenter->avatar}}">
                            <h2>{{$presenter->name}}</h2>
                            <h5>{{$presenter->bio}}</h5>
                        </a>
                    </div>
                </div>
            </div>

        </section>

    </section>

@endsection