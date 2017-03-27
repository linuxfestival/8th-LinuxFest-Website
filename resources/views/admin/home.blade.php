@extends('layouts.app')

@section('content')
    <section class="container">

        <section class="session-container">
            <div style="text-align: center">
                <h1>
                    پنل مدیریت جشنواره لینوکس
                </h1>
                <span>
                    کاربر فعلی:
                    <a href="{{url('/logout')}}">{{Auth::user()->name}} - خروج</a>
                </span>
            </div>
            <hr>
            <div class="row">
                <a href="{{route('admin::live.index')}}" >
                    <button>
                        بخش مدیریت پوشش زنده
                    </button>
                </a>
                <a href="{{route('admin::submissions')}}" >
                    <button>
                        بخش مدیریت درخواست حمایت‌های علمی
                    </button>
                </a>
                <a href="{{route('admin::submissions.sponsors')}}" >
                    <button>
                        بخش مدیریت درخواست‌های حمایت مالی
                    </button>
                </a>
                <a href="{{route('admin::presenters')}}" >
                <button>
                    بخش مدیریت ارائه دهندگان
                </button>
                </a>
            </div>

        </section>

    </section>

@endsection