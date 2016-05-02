<aside class="bg-dark" id="special">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                   قسمت ویژه جشنواره
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            @foreach($sections as $section)
                <?php if(strpos($section['type'], 'Special') !== false) : ?>
                <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                    <div class="thumbnail" style="background-color: #636363; border: 1px solid #501711;">
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