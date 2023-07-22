<?php

$heading = "Home";

function dd($value)
{
    echo "<pre>";
    die(var_dump($value));
    echo "</pre>";

    die();
}

function isUrl ($url) {
    return $_SERVER['REQUEST_URI'] === $url;
}

require "views/index.view.php";
