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

            <?php foreach (get_presentations() as $k => $i) : ?>

                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4>
                                <?php echo $i['title'] ?>
                            </h4>
                            <br>

                            <div style="text-align: center">
                                <a href="<?php echo viewUri('presentation?s=' . $k) ?>"
                                   class="btn btn-info" target="_blank">
                                    مشاهده‌ی جزئیات
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

</section>
