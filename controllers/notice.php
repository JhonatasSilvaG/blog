<?php

require '../model/News.php';

$news = new News();

$news = $news->getNews($_GET['id']);

loadView('views/notice.view.php', [
    'news' => $news
]);