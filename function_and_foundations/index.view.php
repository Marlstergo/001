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
            <?php foreach ($filteredBooks as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name'] ?> released <?= $book['released'] ?>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</body>

</html>