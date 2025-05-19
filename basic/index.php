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
        return $book['releaseYear'] >= 2000;
    });

    require 'index.view.php';

