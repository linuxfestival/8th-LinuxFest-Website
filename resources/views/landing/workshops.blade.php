<section class="bg-boo" id="workshops">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    کارگاه‌ها
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            {{--<?php foreach ($workshops as $k => $i) : echo $k;?>--}}


                {{--<div class="col-lg-4 col-md-4 text-center">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<div class="caption">--}}
                            {{--<h3>--}}
                                {{--<?php echo substr($i['title'],0,40) ?>--}}
                            {{--</h3>--}}

                            {{--<h5>--}}
                                {{--<?php if(isset($workshops[$i['presenter']]))--}}
                                    {{--echo $workshops[$i['presenter']]['name']; else echo "‌"; ?>--}}
                            {{--</h5>--}}

                            {{--<br>--}}
                            {{--<br>--}}


                            {{--<div style="text-align: center">--}}
                                {{--<a href="<?php echo viewUri('workshop?s=' . $k) ?>"--}}
                                   {{--class="btn btn-info" target="_blank">--}}
                                    {{--مشاهده‌ی جزئیات--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--<?php endforeach; ?>--}}

        </div>

    </div>
</section>
