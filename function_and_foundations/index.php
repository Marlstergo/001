<?php
$book = 'Dark Matter';
$read = true;

$allBooks = [
    "Dark Matter",
    "Hail Mary",
    "The Martian",
    "The Three Body Problem",
];

$associativeBooks = [
    [
        'name' => 'Dark Matter',
        'author' => 'Blake Crouch',
        'purchaseUrl' => 'https://www.amazon.com/Dark-Matter-Novel-Blake-Crouch/dp/1101904224',
        'released' => '20020',
    ],
    [
        "name" => 'Hail Mary',
        'author' => 'Mary linn',
        "purchaseUrl" => "https://www.amazon.com/Hail-Mary-Andy-Weir/dp/0593170677",
        'released' => '20020',
    ]
];

function filterByAuthor($books, $author)
{
    $filteredBooks = [];
    foreach ($books as $book) {
        if ($book['author'] === $author) {
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
};

function filter($items, $fn)
{
    $filteredItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}

function inBuiltPhpFilter($items, $fn)
{
    return array_filter($items, $fn);
}

$filteredBooks = inBuiltPhpFilter($associativeBooks, function ($book) {
    return $book['author'] === 'Mary linn';
});

require 'index.view.php';
