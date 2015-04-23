<?php
if (!defined('section'))
    err_404();

global $data;
if (!$data)
    err_404();

$presenter = get_presenters()[$data['presenter']];

insertView('layout/header');

?>


<section id="<?php echo section ?>" class="container">

    <section class="session-container">
        <div style="text-align: center">
            <h1>
                <?php echo $data['title'] ?>
            </h1>

            <p>

            <span>
                سطح :
                <label class="label label-danger"><?php echo $data['level'] ?></label>
            </span>

                &nbsp;&nbsp;

                <span>
            زمان برگزاری :
            <label class="label label-success"><?php echo $data['time'] ?></label>
                    </span>

                &nbsp;&nbsp;

                <span>
            محل :
            <label class="label label-info"><?php echo $data['room'] ?></label>
                    </span>

            </p>


        </div>


        <hr>

        <div class="row">
            <div class="col-md-3">
                <div style="text-align: center;">
                    <a href="<?php echo $presenter['url'] ?>" class="profile2" target="_blank">
                        <img style="max-height: 220px;" src=<?php echo $presenter['avatar'] ?>>

                        <h2><?php echo $presenter['name'] ?></h2>
                        <h5><?php echo $presenter['bio'] ?></h5>
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <p>
                    <?php echo $data['desc'] ?>
                </p>
            </div>
        </div>

    </section>

</section>

<?php insertView('layout/footer'); ?>

