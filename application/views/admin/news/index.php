<?php echo $header_admin ?>
        <h2>Новости</h2>
        <p>На этой странице можно посмотреть опубликованные новости и опубликовать новые. Что бы изменить существующие, необходимо удалить и добавить новый с внесёнными изменениями</p>
        <form action="" method="post" enctype="multipart/form-data">
           <h3>Добавление новости</h3>
            <label for="title">Тема новости</label>
            <input type="text" name="title" id="title"><br>
            <label for="img">Изображение для этой новости</label>
            <input type="file" name="img" id="img"><br>
            <label for="article">Содержание новости</label>
            <textarea name="article"></textarea>
            <input name="add" class="button" type="submit" value="Добавить"><br>
        </form>
        <h3>Уже опубликованные</h3>
        <table>
            <tr>
                <td>ID</td>
                <td>Тема</td>
                <td>Содержание</td>
                <td></td>
            </tr>
            <?php foreach($news as $new): ?>
            <tr value="<?php echo $new['id']; ?>">
                <td><?php echo $new['id']; ?></td>
                <td><?php echo $new['title']; ?></td>
                <td><?php echo $new['content']; ?></td>
                <td>
                    <span id="rem_new" class="button">Удалить</span>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
<script>
	$('html').on('click', 'span#rem_new', function () {
        $.ajax({
				url: "",
				type: "POST",
				data: ({rem:1, id:$(this).parent().parent().attr('value')}),
				dataType: "html"
			});
		$(this).parent().parent().remove();
	});
</script>
<?php echo $footer_admin ?>