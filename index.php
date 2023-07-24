<?php

require 'functions.php';

class Database
{
    public $connection;

    // create contructor
    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=php;user=root;charset=utf8mb4";
        $this->connection = new PDO($dsn);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}


$db = new Database();

$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

// dd($posts[0]['author']);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . '  Author:  ' . "<b>" . $post['author'] . "</b>" .  "</li>";
}
