<aside class="bg-mellow-yellow" id="sponsors" style="backgroung:#000">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">
                حامیان جشنواره
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container grid-wrap col-set-one-quarter tablet-col-set-one-half phone-col-set-full">
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
</aside>

<aside class="bg-white" id="sponsors3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">
                    برگزار کنندگان
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container grid-wrap col-set-one-quarter tablet-col-set-one-half phone-col-set-full">
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
</aside>
