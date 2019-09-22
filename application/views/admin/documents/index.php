<?php echo $header_admin ?>
        <h2>Документы</h2>
        <p>На этой странице можно посмотреть документы и  добавить новые. Что б изменить существующие, необходимо удалить и добавить новый с внесёнными изменениями</p>
        <form action="" method="post">
            <input name="add" class="button" type="submit" value="Добавить">
            <label for="title">Название документа</label>
            <input type="text" name="title" id="title">
            <label for="tiarticletle">Содержание документа</label>
            <textarea name="article" id="article"></textarea>
        </form>
        <h3>Уже добавленные</h3>
        <table>
            <tr>
                <td>ID</td>
                <td>Название</td>
                <td></td>
            </tr>
            <?php foreach($documents as $document): ?>
            <tr value="<?php echo $document['id']; ?>">
                <td><?php echo $document['id']; ?></td>
                <td><?php echo $document['title']; ?></td>
                <td>
                    <span id="rem_doc" class="button">Удалить</span>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
<script>
	$('html').on('click', 'span#rem_doc', function () {
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