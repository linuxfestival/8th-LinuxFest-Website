<aside class="bg-violet" id="sponsors" style="backgroung:#000">
    <div class="container text-center">
        <div class="call-to-action">

            <h2>
                حامیان جشنواره
            </h2>

            <div class="row">

                @foreach($sponsors as $sponsor)
                    <?php if(strpos($sponsor['type'], 'money') !== false) : ?>
                        <div class="col-md-6">
                            <a href="{{$sponsor->url}}" target="_blank">
                                <img src="{{$sponsor->logo}}" class="sponsor-img">
                            </a>
                            {{--<h5>{{$sponsor->title}}</h5>--}}
                        </div>
                    <?php endif; ?>
                @endforeach


            </div>


        </div>
    </div>
</aside>

<aside class="bg-boo" id="sponsors1">
    <div class="container text-center">
        <div class="call-to-action">

            <h2>
                حامیان رسانه‌ای جشنواره
            </h2>

            <div class="row">

                @foreach($sponsors as $sponsor)
                    <?php if(strpos($sponsor['type'], 'press') !== false) : ?>
                    <div class="col-md-6">
                        <a href="{{$sponsor->url}}" target="_blank">
                            <img src="{{$sponsor->logo}}" class="sponsor-img">
                        </a>
                        {{--<h5>{{$sponsor->title}}</h5>--}}
                    </div>
                    <?php endif; ?>
                @endforeach

            </div>


        </div>
    </div>
</aside>

<aside class="bg-gray" id="sponsors2">
    <div class="container text-center">
        <div class="call-to-action">

            <h2>
                حامیان معنوی جشنواره
            </h2>

            <div class="row">

                @foreach($sponsors as $sponsor)
                    <?php if(strpos($sponsor['type'], 'moral') !== false) : ?>
                    <div class="col-md-4">
                        <a href="{{$sponsor->url}}" target="_blank">
                            <img src="{{$sponsor->logo}}" class="sponsor-img">
                        </a>
                        {{--<h5>{{$sponsor->title}}</h5>--}}
                    </div>
                    <?php endif; ?>
                @endforeach

            </div>


        </div>
    </div>
</aside>

<aside class="bg-white" id="sponsors3">
    <div class="container text-center">
        <div class="call-to-action">

            <h2>
                برگزار کنندگان
            </h2>

            <div class="row">

                @foreach($sponsors as $sponsor)
                    <?php if(strpos($sponsor['type'], 'founder') !== false) : ?>
                    <div class="col-md-4">
                        <a href="{{$sponsor->url}}" target="_blank">
                            <img src="{{$sponsor->logo}}" class="sponsor-img">
                        </a>
{{--                        <h5>{{$sponsor->title}}</h5>--}}
                    </div>
                    <?php endif; ?>
                @endforeach

            </div>


        </div>
    </div>
</aside>

{{--<aside>--}}
    {{--<div class="container text-center">--}}
        {{--<div class="call-to-action">--}}

            {{--<h2>--}}
                {{--برگزار‌کنندگان--}}
            {{--</h2>--}}

            {{--<div class="row">--}}

                {{--<div class="col-md-2 col-md-offset-1">--}}
                    {{--<a href="https://linuxfest.ir" target="_blank">--}}
                        {{--<img src="{{asset('img/sponsors/linuxfest.png')}}" class="sponsor-img">--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="col-md-2">--}}
                    {{--<a href="" target="_blank">--}}
                        {{--<img src="" class="sponsor-img">--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="col-md-2">--}}
                    {{--<a href="http://ceit-ssc.ir/" target="_blank">--}}
                        {{--<img src="{{asset('img/sponsors/anjoman.png')}}" class="sponsor-img">--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="col-md-2">--}}
                    {{--<a href="" target="_blank">--}}
                        {{--<img src="" class="sponsor-img">--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="col-md-2">--}}
                    {{--<a href="http://sao.aut.ac.ir/" target="_blank">--}}
                        {{--<img src="{{asset('img/sponsors/anjoman_kol.png')}}" class="sponsor-img">--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="col-md-2">--}}
                    {{--<a href="http://ce.aut.ac.ir/" target="_blank">--}}
                        {{--<img src="{{asset('img/sponsors/autceit.png')}}" class="sponsor-img">--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="col-md-2">--}}
                    {{--<a href="http://aut.ac.ir/" target="_blank">--}}
                        {{--<img src="{{asset('img/sponsors/aut.png')}}" class="sponsor-img">--}}
                    {{--</a>--}}
                {{--</div>--}}


            {{--</div>--}}


        {{--</div>--}}
    {{--</div>--}}
{{--</aside>--}}
