<?php echo $header_admin ?>
        <h2>Статьи</h2>
        <p>На этой странице можно посмотреть статьи и  добавить новые. Что б изменить существующие, необходимо удалить и добавить новый с внесёнными изменениями</p>
        <form action="" method="post">
            <input name="add" class="button" type="submit" value="Добавить">
            <label for="title">Название статьи</label>
            <input type="text" name="title" id="title">
            <label for="tiarticletle">Содержание статьи</label>
            <textarea name="article" id="article"></textarea>
        </form>
        <h3>Уже добавленные</h3>
        <table>
            <tr>
                <td>ID</td>
                <td>Название</td>
                <td></td>
            </tr>
            <?php foreach($articles as $article): ?>
            <tr value="<?php echo $article['id']; ?>">
                <td><?php echo $article['id']; ?></td>
                <td><?php echo $article['title']; ?></td>
                <td>
                    <span id="rem_art" class="button">Удалить</span>
                    <a href="/" class="button">Посмотреть</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
<script>
	$('html').on('click', 'span#rem_art', function () {
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