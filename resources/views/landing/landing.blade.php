@extends('layout.app')

@section('content')
    @include('landing.includes.header')
    @include('landing.includes.about')
{{--    @include('landing.includes.special')--}}
    @include('landing.includes.sections')
    @include('landing.includes.presenters')
    @include('landing.includes.sponsors')
    @include('landing.includes.contact')
@endsection