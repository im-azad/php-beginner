<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function and filter</title>
</head>
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
            ]
        ];
    ?>

    <!-- Print the data -->
    <ul>
        <?php foreach ($books as $book) : ?>
            <?php if($book['author'] === 'Andy Weir') : ?>
            <li> 
                <a href="<?=$book['purchaseUrl']?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ; ?>)
                </a>
            </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>