<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $description ?>">
	<meta name="keywords" content="<?php echo $keywords ?>">
	
    <link rel="shortcut icon" href="/application/public/img/favicon.ico" type="image/x-icon">
	
	<title><?php echo $title ?> | <?php echo $description ?></title>
    
    <!-- jQuery JS -->
    <script src="/application/public/js/jquery-2.2.0.min.js" type="text/javascript" charset="utf-8"></script>
    
    <!-- CSS -->
	<link href="/application/public/css/bootstrap_4.1.1.min.css" rel="stylesheet">
    <link href="/application/public/css/admin.css" rel="stylesheet">
    <!-- Optional CSS -->
    <?php if(isset($css)): foreach($css as $style):?>
    <link href="/application/public/css/<?php echo $style;?>.css" rel="stylesheet">    
    <?php endforeach; endif; ?>
    	
</head>
<body>
    <header>
        <nav>
            <h3>Меню</h3><hr>
            <ul>
                <li><a href="/admin/contacts">Контактные данные</a></li><hr>
                <li><a href="/admin/about">Главная О НАС</a></li><hr>
                <li><a href="/admin/documents">Документы</a></li>
                <li><a href="/admin/articles">Статьи</a></li>
                <li><a href="/admin/news">Новости</a></li>
                <li><a href="/admin/comments">Отзывы</a></li><hr>
                <li><a href="/admin/users">Пользователи</a></li>
                <li><a href="?logout=1">Выйти</a></li>
            </ul>
        </nav>
    </header>
    <content>