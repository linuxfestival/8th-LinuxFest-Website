<aside class="bg-dark-violet" id="workshops">
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
                        <div class="thumbnail" style="background-color: #636363; border: 1px solid #4b4850;">
                            <div class="caption" style="color: #afb1e8;">
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
                                       class="btn btn-info" target="_blank" style="background-color: #9591cc; border-color: #948fd8;">
                                        <span>مشاهده‌ی جزئیات</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            @endforeach
        </div>
    </div>
</aside>

<aside class="bg-dark-violet" id="sections2">
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
            <p class="text-faded text-center" style="font-size: 20px;x">
                شرکت‌کنندگان تمامی کارگاه‌ها پذیرایی نهار دارند.
            </p>

            @foreach($sections as $section)
                <?php if(strpos($section['type'], 'workshop') !== false) : ?>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                    <div class="thumbnail" style="background-color: #636363; border: 1px solid #4b4850;">
                        <div class="caption" style="color: #afb1e8;">
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
                                   class="btn btn-info" target="_blank" style="background-color: #9591cc; border-color: #948fd8;">
                                    <span>مشاهده‌ی جزئیات</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            @endforeach
        </div>
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <a href="#presenters" class="page-scroll btn btn-default btn-xl text-center">
                کیا هستن؟
            </a>
        </div>
    </div>
</aside>