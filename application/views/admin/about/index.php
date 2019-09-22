<?php echo $header_admin ?>
        <h2>Главная страница О НАС</h2>
        <p>На этой странице можно редактировать содержимое статьи О НАС, которая также является Главной страницей</p>
        <form action="" method="post">
            <input name="save" class="button" type="submit" value="Сохранить">
            <textarea name="article" id="article"><?php echo $about; ?></textarea>
        </form>
<?php echo $footer_admin ?>