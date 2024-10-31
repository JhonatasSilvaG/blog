<?php

class Database
{
    private $connec;

    public function __construct()
    {
        $dbconfig = require '../config.php';
        extract($dbconfig['Database']);

        $this->connec = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }

    private function query($query, $params = [])
    {
        $statement = $this->connec->prepare($query);
        $statement->execute($params);

        return $statement;
    }

    protected function getAll($query, $params = [], $fetchType = PDO::FETCH_ASSOC)
    {
        return $this->query($query, $params)->fetchAll($fetchType);
    }

    protected function get($query, $params = [], $fetchType = PDO::FETCH_ASSOC)
    {
        return $this->query($query, $params)->fetch($fetchType);
    }
}