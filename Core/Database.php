<?php

namespace Core;

use PDO;

class Database
{
    public $connection;
    public $statment;
    public function __construct($dsn, $username = 'root', $password = NULL, $options = [])
    {
        $p2 = array_slice($dsn, 1);
        $p1 = $dsn['dbtype'];
        $this->connection = new PDO($p1 . ":" . http_build_query($p2, "", ";"), $username, $password, $options);
    }

    public function quiery($query, $parames = [])
    {
        $statment = $this->connection->prepare($query);

        $statment->execute($parames);
        $this->statment = $statment;
        return $this;
    }

    public function get($options = PDO::FETCH_ASSOC)
    {
        return $this->statment->fetchall($options);
    }

    public function find($options = PDO::FETCH_ASSOC)
    {
        return $this->statment->fetch($options);
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;
    }
    public function lastInsertId()
    {
        return $this->connection->lastInsertId();
    }

    // public function fetchall($options = PDO::FETCH_ASSOC)
    // {
    //     return $this->statment->fetchall($options);
    // }

    // public function fetch($options = PDO::FETCH_ASSOC)
    // {
    //     return $this->statment->fetch($options);
    // }

    // public function Insert($query, $parames = [])
    // {
    //     $statment = $this->connection->prepare($query);

    //     $statment->execute($parames);
    // }
}
