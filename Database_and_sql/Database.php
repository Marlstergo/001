<?php

class Database
{
    public $connection;

    // create contructor
    public function __construct($config, $user, $password)
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $user, $password, [
            pdo::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        // dd($this->connection->prepare("select * from posts")->execute());
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}
