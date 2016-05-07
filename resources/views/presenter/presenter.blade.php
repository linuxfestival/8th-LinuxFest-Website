@extends('layout.app')

@section('content')
    <section class="container">

        <section class="bg-primary">
            <div style="text-align: center">
                <h1>
                    {{$presenter['name']}}
                </h1>
                <h3 style="color: white">
                    <a href="{{$presenter->url}}" style="color: white">صفحه شخصی</a>
                </h3>
            </div>
        </section>

    </section>
@endsection