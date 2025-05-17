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
        color:#509393;
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
            ]
        ];

        function filterByAuthor($books) {
           $filteredBooks = [];
           foreach($books as $book) {
                if($book['author'] === 'Andy Weir') {
                    $filteredBooks[] = $book;
                }
           }
           return $filteredBooks;
        }

   
    ?>

    <!-- Print the data -->
    <ul>
        <?php foreach ($books as $book) : ?>
            <li> 
                <a href="<?=$book['purchaseUrl']?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ; ?>) 
                </a>
                <spn class="author" >by <?= $book['author']; ?> </spn>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Filtered Array</h2>
   <ol>
        <?php foreach (filterByAuthor($books) as $book) : ?>
            <li> 
                <a href="<?=$book['purchaseUrl']?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ; ?>)
                </a>
            </li>
        <?php endforeach; ?>
   </ol>
    
</body>
</html>