<section class="bg-green" id="presentations">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    ارائه‌ها
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            @foreach($presenters as $presenter)

                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4>
                                {{$presenter['title']}}
                            </h4>
                            <h5>
                                {{$presenter['name']}}
                            </h5>

                            <br>
                            <br>

                            <div style="text-align: center">
                                <a href="{{$presenter['id']}}"
                                   class="btn btn-info" target="_blank">
                                    مشاهده‌ی جزئیات
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>

</section>
