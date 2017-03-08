@extends('layouts.app')

@section('content')
    <section class="container">

        <section class="session-container">
            <div style="text-align: center">
                <h1>
                    مدیریت پوشش زنده خبری
                </h1>
            </div>
            <hr>
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-heading">آخرین پست ارسالی توسط شما در تاریخ : {!! $msg->published_at !!}</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--@if ($msg[0]->img)--}}
                                {{--<a href="{{ asset('liveFeed/' . $msg[0]->img) }}" target="_blank" style="">--}}
                                    {{--<img src="{{ asset('liveFeed/' . $msg[0]->img) }}" alt="{!! $msg[0]->desc !!}" />--}}
                                {{--</a>--}}
                            {{--@endif--}}
                            {{--<p>--}}
                                {{--{!! $msg->desc !!}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">پنل مدیر لایو بلاگ</div>
                        <div class="panel-body">
                            {{ Form::open(['route' => 'message.store', 'files' => true]) }}
                            {{ Form::textarea('desc', null, ['id' => 'form-textarea', 'placeholder' => 'توضیحات']) }}
                            {{ Form::file('img', ['class' => 'form-file']) }}
                            {{ Form::submit('Save Message', ['class' => 'btn btn-primary btn-xl']) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </section>

@endsection