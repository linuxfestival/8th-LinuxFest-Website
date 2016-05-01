<section class="bg-green" id="sections">
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

            @foreach($sections as $section)
                <?php if(strpos($section['type'], 'presentation') !== false) : ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                        <div class="thumbnail">
                            <div class="caption">
                                <h4>
                                    {{$section->title}}
                                </h4>
                                <h5>
                                    {{$section->name}}
                                </h5>

                                <br>
                                <br>

                                <div style="text-align: center">
                                    <a href="{{route('app::section',[$section->id])}}"
                                       class="btn btn-info" target="_blank">
                                        <span>مشاهده‌ی جزئیات</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            @endforeach

        </div>

</section>

<section class="bg-green" id="sections">
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

            @foreach($sections as $section)
                <?php if(strpos($section['type'], 'workshop') !== false) : ?>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4>
                                {{$section->title}}
                            </h4>
                            <h5>
                                {{$section->name}}
                            </h5>

                            <br>
                            <br>

                            <div style="text-align: center">
                                <a href="{{route('app::section',[$section->id])}}"
                                   class="btn btn-info" target="_blank">
                                    <span>مشاهده‌ی جزئیات</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            @endforeach

        </div>

</section>