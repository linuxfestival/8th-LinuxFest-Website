<section id="presenters">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    ارائه دهندگان
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>

    <div class="container grid-wrap col-set-one-quarter tablet-col-set-one-half phone-col-set-full">
        <div class="row">

            <?php foreach (get_presenters() as $presenter) : ?>

                <div class="col-lg-3 col-md-6 col-rtl text-center wow fadeIn">
                    <a href="<?php echo $presenter['url'] ?>"
                       class="profile grid-col" target="_blank">

                        <img style="max-height: 220px;" src=<?php echo $presenter['avatar']?> >

                        <h2><?php echo $presenter['name'] ?></h2>

                        <h5><?php echo $presenter['bio'] ?></h5>

                        <div class="clear"></div>
                        <br>

                    </a>
                </div>

            <?php endforeach; ?>

        </div>
    </div>

</section>
