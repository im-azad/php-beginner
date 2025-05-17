<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Associative Array
    $books = [
        [
            "title" => "The Alchemist",
            "author" => "Paulo Coelho",
            "releaseYear" => 1988,
            "purchaseUrl" => "https://www.goodreads.com/book/show/3.The_Alchemist"
        ],
        [
            "title" => "The Lord of the Rings",
            "author" => "J.R.R. Tolkien",
            "releaseYear" => 1954,
            "purchaseUrl" => "https://www.goodreads.com/book/show/2.The_Lord_of_the_Rings"
        ],
        [
            "title" => "The Hobbit",
            "author" => "J.R.R. Tolkien",
            "releaseYear" => 1937,
            "purchaseUrl" => "https://www.goodreads.com/book/show/1.The_Hobbit"
        ]
    ];


    ?>
    <h2>The book lists</h2>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <!-- same tow line -->
                <!-- <?php echo $book["author"];  ?> -->
                <?= $book["title"] . "( ✍" . $book["author"] . ")" ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>