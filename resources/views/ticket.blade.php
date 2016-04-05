<?php
insertView('layout/header');

?>


<section id="ticket" class="container">


    <div style="text-align: center;">
        <h1>
            دریافت بلیت
        </h1>
    </div>
    <hr>

    <div class="alert alert-info">
        همراه داشتن این کارت هنگام شرکت در جشنواره برای ناهار الزامی است !
        تودو
    </div>

    <form class="col-md-7 col-sm-12" action="" method="POST">

        <div class="row">
            <label class="control-label col-md-3" for="name">
کد رهگیری ثبت نام :
            </label>

            <div class="col-md-6">
                <input required="required" type="text" class="form-control input" name="name" id="name">
            </div>
            <div class="col-md-3">
                <input id="submit" name="ok" type="submit" class="btn btn-success btn-lg" value="دریافت">
            </div>
        </div>

    </form>


</section>

<?php insertView('layout/footer'); ?>

