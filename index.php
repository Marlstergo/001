<?php

require 'functions.php';
require 'Database.php';

$config = require 'config.php';
// dd(http_build_query($config, '', ';'));

$db = new Database($config, 'root', '');

$id = $_GET['id'] ?? ['1'];

// dd($id);

$query = "select * from posts where id = ?";


$posts = $db->query($query, [$id])->fetchAll();


foreach ($posts as $post) {
    echo "<li>" . $post['title'] . '  Author:  ' . "<b>" . $post['author'] . "</b>" .  "</li>";
}
