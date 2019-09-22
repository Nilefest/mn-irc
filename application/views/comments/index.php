<?php echo $header ?>
            <div class="article">
                <h1>Відгуки</h1>
                <p>Щоб залишити відгук заповніть форму</p>
                <form action="" method="post">
                    <label for="name">Ім'я</label><input name="name" type="text" id="name"><br>
                    <label for="title">Тема</label><input name="title" type="text" id="title"><br>
                    <label for="message">Відгук</label><textarea name="message" id="message"></textarea><br>
                    <input type="submit" class="button" value="Відправити" name="send">
                </form>
            </div>
            <div class="article">
                <?php foreach($comments as $comment): ?>                
                <div class="comment">
                    <h3><?php echo $comment['title']; ?></h3>
                    <div class="date"><?php echo $comment['name']; ?> | <?php echo $comment['date']; ?></div>
                    <p><?php echo $comment['content']; ?></p>
                    <div class="clear"></div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="clear"></div>
<?php echo $footer ?>