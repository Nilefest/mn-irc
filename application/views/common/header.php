<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $description ?>">
	<meta name="keywords" content="<?php echo $keywords ?>">
	
    <link rel="shortcut icon" href="/application/public/img/favicon.ico" type="image/x-icon">
	
	<title><?php echo $title ?> | <?php echo $description ?></title>
    
	<link href="/application/public/css/bootstrap_4.1.1.min.css" rel="stylesheet">
    <link href="/application/public/css/all.css" rel="stylesheet">
    <!-- Optional CSS -->
    <?php if(isset($css)): foreach($css as $style):?>
    <link href="/application/public/css/<?php echo $style;?>.css" rel="stylesheet">    
    <?php endforeach; endif; ?>
    	
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="/"><img src="/application/public/img/logo.png" alt="logo"></a>
            <ul>
                <li><a href="/comments">Відгуки</a></li>
                <li><a href="/contacts">Контакти</a></li>
                <li><a href="/news">Новини</a></li>
                <li><a class="sub-menu-article">Статті</a></li>
                <div class="sub sub-article">
                    <?php foreach($articles as $article): ?>
                    <a href="/article/show/<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a>
                    <?php endforeach; ?>
                </div>
                <li><a class="sub-menu-document">Законодавство</a></li>
                <div class="sub sub-document">
                    <?php foreach($documents as $document): ?>
                    <a href="/document/show/<?php echo $document['id']; ?>"><?php echo $document['title']; ?></a>
                    <?php endforeach; ?>
                </div>
                <li><a href="/">Про центр</a></li>
            </ul>
            <div class="clear"></div>
        </nav>
        <?php if($ismain): ?>
        <img class="main-img" src="/application/public/img/main.png" alt="Main IMAGE">
        <?php endif;?>
    </header>
    <div class="container">
        <content>