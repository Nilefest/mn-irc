        </content>
    </div>
    <footer>
        <div class="links">
            <h2>Гарячі посилання</h2>
            <ul style="width:20%;">
                <li><a href="/">Про центр</a></li>
                <li><a href="comments">Відгуки</a></li>
                <li><a href="contacts">Контакти</a></li>
            </ul>
            <ul>
                <li><a>Законодавство</a></li>
                <?php foreach($documents as $document): ?>
                <li><a href="document/show/<?php echo $document['id']; ?>"><?php echo $document['title']; ?></a></li>
                <?php endforeach; ?>
            </ul>
            <ul>
                <li><a href="news">Новини</a></li>
                <?php foreach($news as $new): ?>
                <li><a href="news#<?php echo $new['id']; ?>"><?php echo $new['title']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="contact">
            <h2>Адреса</h2>
            <p><?php echo $map; ?></p>
        </div>
        <div class="clear"></div>
        <div class="copyright">© MIRCENTR 2018 All rights reserved | <a href="admin">LogIn</a> | <a href="/">Desigh by</a></div>
    </footer>
    <!-- jQuery JS -->
    <script src="/application/public/js/jquery-2.2.0.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- Optional JS -->
    <script src="/application/public/js/script.js" type="text/javascript" charset="utf-8"></script>
    <?php if(isset($js)): foreach($js as $script):?>
    <script src="/application/public/js/<?php echo $script;?>.js" type="text/javascript" charset="utf-8"></script>   
    <?php endforeach; endif; ?>
</body>
</html>
