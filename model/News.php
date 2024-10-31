<?php

require 'Database.php';

class News extends Database
{
    public function getAllNews()
    {
        return $this->getAll('SELECT news.id, title, text, date, topic FROM news INNER JOIN topics on news.id_topic = topics.id');
    }

    public function getTopics()
    {
        return $this->getAll('SELECT topic FROM topics');
    }

    public function getAllNewsTopic($topic, $limit = 0)
    {
        if(!$limit)
        {
            return $this->getAll('SELECT news.id, title, text, date, topic FROM news INNER JOIN topics on news.id_topic = topics.id WHERE topic = :topic LIMIT 0, :limit', [':topic' => $topic, ':limit' => $limit]);
        }
        else{
            return $this->getAll('SELECT news.id, title, text, date, topic FROM news INNER JOIN topics on news.id_topic = topics.id WHERE topic = :topic', [':topic' => $topic]);
        }
    }

    public function getNews($newsId)
    {
        return $this->get('SELECT news.id, title, text, date, topic FROM news INNER JOIN topics on news.id_topic = topics.id WHERE news.id = :newsId', [':newsId' => $newsId]);
    }
}