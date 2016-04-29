<aside class="bg-yellow" id="sponsors">
    <div class="container text-center">
        <div class="call-to-action">

            <h2>
                حامیان
            </h2>

            <div class="row">

                @foreach($sponsors as $sponsor)
                    <div class="col-md-4">
                        <a href="{{$sponsor->url}}" target="_blank">
                            <img src="{{asset('img/sponsors/peidad.png')}}" class="sponsor-img">
                        </a>
                        <h5>{{$sponsor->title}}</h5>
                    </div>
                @endforeach

            </div>


        </div>
    </div>
</aside>


<aside>
    <div class="container text-center">
        <div class="call-to-action">

            <h2>
                برگزار‌کنندگان
            </h2>

            <div class="row">


                <div class="col-md-2 col-md-offset-2">
                    <a href="http://ceit-ssc.ir/" target="_blank">
                        <img src="{{asset('img/sponsors/aut_ssc.png')}}" class="sponsor-img">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="http://sao.aut.ac.ir/" target="_blank">
                        <img src="{{asset('img/sponsors/aut_federal.png')}}" class="sponsor-img">
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="http://ce.aut.ac.ir/" target="_blank">
                        <img src="{{asset('img/sponsors/aut_ceit.png')}}" class="sponsor-img">
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="http://aut.ac.ir/" target="_blank">
                        <img src="{{asset('img/sponsors/aut.png')}}" class="sponsor-img">
                    </a>
                </div>


            </div>


        </div>
    </div>
</aside>
