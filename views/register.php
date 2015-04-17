<?php insertView('layout/header'); ?>

<section id="register" class="container">

    <div style="text-align: center;">
        <h1>
            ثبت نام در هفتمین جشنواره لینوکس امیرکبیر
        </h1>
    </div>
    <hr>

    <form class="col-md-7 col-sm-12" action="" method="POST">
        <fieldset>
            <legend>
                اطلاعات شخصی
            </legend>

            <!-- Fullname -->
            <label class="control-label col-md-3" for="full_name">*
                نام و نام خانوادگی
            </label>
            <input type="text" class="form-control input col-md-9" name="full_name" id="full_name">

            <p class="help-block col-md-offset-3">
                لطفا نام کامل خود را به صورت فارسی بنویسید
            </p>

            <!-- Email -->
            <label class="control-label col-md-3" for="full_name">*
                Email
            </label>
            <input type="email" dir="ltr" class="form-control input col-md-9" name="full_name" id="full_name">

            <p class="help-block col-md-offset-3">
                از این آدرس فقط و فقط جهت اطلاع رسانی در مورد جشنواره استفاده می شود
            </p>


            <!-- Tel -->
            <label class="control-label col-md-3" for="full_name">
                تلفن تماس
            </label>
            <input type="tel" dir="ltr" class="form-control input col-md-9" name="full_name" id="full_name">

            <p class="help-block col-md-offset-3">

            </p>


        </fieldset>

        <br>


        <br>

        <?php $i = 1;
        foreach (get_reg_data() as &$day): ?>
            <fieldset>
                <legend><?php echo $day['title']; ?></legend>

                <?php $j = 0;
                foreach ($day['items'] as $val => $title) : ?>
                    <div class="radio radio-inline_x radio-<?php echo $j == 0 ? 'warning' : 'info' ?>">
                        <input type="radio"
                               name="<?php echo "day$i" ?>" id="<?php echo 'day' . $i . "_$val" ?>"
                               value="<?php echo $val ?>"
                            <?php if ($j == 1) echo 'checked=checked' ?>
                            >
                        <label for="<?php echo 'day' . $i . "_$val" ?>">
                            <?php echo $title ?>
                        </label>
                    </div>
                    <?php $j++; endforeach ?>

                <br>
شما در این ارائه ها شرکت می کنید :
                <?php $j = 0;
                foreach ($day['presentations'] as $title) : ?>

                    <div class="presentation checkbox checkbox-inline checkbox-success">
                        <input type="checkbox" readonly="readonly"
                               class='<?php echo "day$i-presentation p$j"?>'>
                        <label><?php echo $title ?></label>
                    </div>

                    <?php $j++; endforeach ?>


            </fieldset>
            <br>
            <?php $i++;
        endforeach ?>


        <div class="row">
            <br>
            <br>

            <div class="col-sm-offset-6">
                <input type="submit" class="btn btn-success btn-lg" value="ثبت نام">
            </div>
        </div>
    </form>


</section>

<?php insertView('layout/footer'); ?>

<script>
    $('input[name="day1"]').change(update_presentations);
    $('input[name="day2"]').change(update_presentations);
    update_presentations();
</script>

