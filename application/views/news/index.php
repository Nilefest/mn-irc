<?php echo $header ?> 
            <div class="article">
                <h1>Новини</h1>
                <p><?php echo $about; ?></p>
            </div>
            <div class="article">
                <?php foreach($news as $new): ?>
                <div class="new">
                    <h3><?php echo $new['title']; ?></h3>
                    <div class="date"><?php echo $new['date']; ?></div>
                    <img src="/application/public/img/news/<?php echo $new['id']; ?>.PNG" alt="<?php echo $new['title']; ?>">
                    <p><?php echo $new['content']; ?></p>
                    <div class="clear"></div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="clear"></div>
<?php echo $footer ?>