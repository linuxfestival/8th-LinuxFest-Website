@extends('layout.app')

@section('content')
    <section class="container">

        <section class="session-container">
            <div style="text-align: center">
                <h1>
                    پوشش زنده خبری جشنواره
                </h1>
            </div>
            <hr>
            <div class="row">
                @foreach($messages as $msg)
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">{!! $msg->published_at !!}</div>
                            <div class="panel-body" style="">
                                @if ($msg->img)
                                    <a href="{{ asset('liveFeed/' . $msg->img) }}" target="_blank" style="">
                                        <img src="{{ asset('liveFeed/' . $msg->img) }}" alt="{!! $msg->desc !!}" />
                                    </a>
                                @endif
                                <p>
                                    {!! $msg->desc !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </section>

    </section>

@endsection