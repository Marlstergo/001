<?php

require 'validator.php';

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'New note';
$currentUserId = 2;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];


    if (!Validator::isString($_POST['body'])) {
        $errors['body'] = 'Note body is required';
    } else if (!$validator->isString($_POST['body'], 1, 10)) {
        $errors['body'] = 'Note can not be longer than 10 characters';
    } else {
        //  remove body from errors array if it is valid
        unset($errors['body']);
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes (body, user_id) values (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => $currentUserId
        ]);
    }
};


require "views/note-create.view.php";
