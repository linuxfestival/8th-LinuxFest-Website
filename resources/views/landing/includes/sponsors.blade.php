<aside class="bg-white" id="sponsors" style="backgroung:#000">
    <div class="container text-center">
        <div class="call-to-action">

            <h2>
                حامیان جشنواره
            </h2>

            <div class="row">

                @foreach($sponsors as $sponsor)
                    <?php if( ! strstr($sponsor['type'], 'founder')) : ?>
                    <div class="col-md-2">
                        <a href="{{$sponsor->url}}" target="_blank">
                            <img src="{{$sponsor->logo}}" class="sponsor-img">
                        </a>
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
                    <?php if( strstr($sponsor['type'], 'founder') ) : ?>
                    <div class="col-md-4">
                        <a href="{{$sponsor->url}}" target="_blank">
                            <img src="{{$sponsor->logo}}" class="sponsor-img">
                        </a>

                    </div>
                    <?php endif; ?>
                @endforeach

            </div>


        </div>
    </div>
</aside>
