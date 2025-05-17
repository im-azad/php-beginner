<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function and filter</title>
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
    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Martian sd',
            'author' => 'Andy Weir sdf',
            'releaseYear' => 2010,
            'purchaseUrl' => 'http://example.com'
        ]
    ];

    /* 
     $filter = function ($books, $key, $value)
    {
        $filteredBooks = [];
        foreach ($books as $book) {
            if ($book[$key] === $value) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    };

    $filteredBooks = $filter($books, 'releaseYear', 2010); 
    
    */


    function filter($items, $fun)
    {
        $filteredItems = [];
        foreach ($items as $item) {
            if ($fun($item)) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    };

    // $filteredBooks = filter($books, function($book){
    //     return $book['releaseYear'] >= 2010;
    // });


    // Using PHP array_filter
    $filteredBooks = array_filter($books, function ($book) {
        return $book['releaseYear'] == 2011;
    });

    ?>



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