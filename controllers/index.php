<?php

require '../model/News.php';

$news = new News();
$allNews = $news->getAllNews();
$topics = $news->getTopics();

loadView('views/index.view.php', [
    'allNews' => $allNews,
    'topics' => $topics
]);