<?php echo $header_admin ?>
        <h2>Отзывы и комментарии</h2>
        <p>На этой странице можно просмотреть существующие отзывы и удалить нужные</p>
        <h3>Добавленные отзывы</h3>
        <table>
            <tr>
                <td>ID</td>
                <td>Дата</td>
                <td>Имя</td>
                <td>Тема</td>
                <td>Содержание</td>
                <td></td>
            </tr>
            <?php foreach($comments as $comment): ?>
            <tr value="<?php echo $comment['id']; ?>">
                <td><?php echo $comment['id']; ?></td>
                <td><?php echo $comment['date']; ?></td>
                <td><?php echo $comment['name']; ?></td>
                <td><?php echo $comment['title']; ?></td>
                <td><?php echo $comment['content']; ?></td>
                <td>
                    <span id="rem_com" class="button">Удалить</span>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
<script>
	$('html').on('click', 'span#rem_com', function () {
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