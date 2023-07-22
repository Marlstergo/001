<?php

$heading = 'About Us';
function isUrl ($url) {
    return $_SERVER['REQUEST_URI'] === $url;
}

require "views/about.view.php";