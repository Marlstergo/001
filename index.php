<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
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
    ]
    ?>
    <div>
        <h1>
            <?php
            if ($read) {
                echo "You have read {$book}";
            } else {
                echo "You have not read {$book}";
            }
            ?>
        </h1>

        <br />

        <h1>Recomended Books</h1>

        <ul>
            <?php
            foreach ($allBooks as $book) {
                echo "<li>{$book}</li>";
            }
            ?>
            <?php foreach ($allBooks as $book) : ?>
                <li><?= $book ?></li>
            <?php endforeach; ?>
        </ul>
        <p><?= $allBooks[2] ?></p>
        <p><?= $associativeBooks[1]['name'] ?></p>
        <ul>
            <?php foreach ($associativeBooks as $book) : ?>
                <?php if ($book['author'] === "Blake Crouch") : ?>
                    <li>
                        <a href="<?= $book['purchaseUrl'] ?>">
                            <?= $book['name'] ?> released <?= $book['released'] ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>

        </ul>
    </div>
</body>

</html>