<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Fundamentals of PHP</title>
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        display: grid;
        place-items: center;
        background-color: #fcf6f6;
    }

    .author {
        color: #509393;
    }
</style>

<body>


    <h2>Lambda Function</h2>
    <ol>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear']; ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ol>

</body>

</html>