<?php
if (!defined('section'))
    err_404();

global $data;
if (!$data)
    err_404();

insertView('layout/header');

?>


<section id="<?php echo section ?>" class="container">

    <section class="bg-primary">
    <div style="text-align: center">
        <h1>
            <?php echo $data['title'] ?>
        </h1>
    </div>
    </section>
<!--    <hr>-->

    <div class="row">
        <div class="col-md-3">
            <section>

                <div class="thumbnail">
                    <h3 style="text-align: center">
                        سطح مهارت
                    </h3>
                    <hr>
                    <p><?php echo $data['level'] ?></p>
                </div>

                <div class="thumbnail">
                    <h3 style="text-align: center">
                        زمان برگزاری
                    </h3>
                    <hr>
                    <p><?php echo $data['time'] ?></p>

                    <h3 style="text-align: center">
                        محل برگزاری
                    </h3>
                    <hr>
                    <p><?php echo $data['room'] ?></p>

                </div>


            </section>
        </div>
        <div class="col-md-9">
            <section>
                <p>
                    <?php echo $data['desc'] ?>
                </p>
            </section>
        </div>
    </div>

</section>

<?php insertView('layout/footer'); ?>

