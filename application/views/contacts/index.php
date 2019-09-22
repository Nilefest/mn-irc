<?php echo $header ?>
            <div class="article">
                <h1>Контактна інформація</h1>
                <h2>Зателефонуйте нам</h2>
                <?php foreach($phones as $phone): ?>
                <p><?php echo $phone['title']; ?> - <?php echo $phone['contact']; ?></p>
                <?php endforeach; ?>
                <h2>Напишіть</h2>
                <p><?php echo $mail; ?></p>
                <h2>Знайдіть на мережі</h2>
                <?php foreach($social as $soc): ?>
                <p><a href="<?php echo $soc['contact']; ?>"><?php echo $soc['title']; ?></a></p>
                <?php endforeach; ?>
                <h2>Ми на карті</h2>
                <p><?php echo $map; ?></p>
            </div>
<?php echo $footer ?>