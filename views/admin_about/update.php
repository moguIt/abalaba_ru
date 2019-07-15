<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/about">Управление пунктом "О нас"</a></li>
                    <li class="active">Редактировать пункт меню "О нас"</li>
                </ol>
            </div>


            <h4>Редактировать "О нас"</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form update-about">
                    <form action="#" method="post">
                        <p>Информация о магазине</p>
                        <textarea name="textAbout"><?php foreach ($aboutList as $about): echo $about; endforeach; ?></textarea>

                        <br><br>

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

