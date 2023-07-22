<?php

$heading = 'Contact Us';

function isUrl ($url) {
    return $_SERVER['REQUEST_URI'] === $url;
}

require "views/contact.view.php";