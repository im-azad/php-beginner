<!DOCTYPE html>
<html>

<head>
    <title>HTML Tutorial</title>
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        display: grid;         
        place-items: center;
        background-color: #ffefef;
    }
 
</style>

<body>

<!-- Conditional Rendering -->

    <?php 
        $book_name = "Quran";
        $is_read = false;
        if($is_read) {
            $message = "You have read $book_name, Good!";
        } else {
            $message = "You have not read $book_name, Bad!!";
        }
    ?>
    <h1>
        <?php echo $message; ?>

    </h1>
    <p> <?= $message ?> </p>

    <!-- Variable and print -->
    <h2>
        <?php
            $my_name = "John Doe";

            /* This is a comment */
            echo "Hello $my_name!";


        ?>
    </h2>
    <p>This is a paragraph.</p>
    <p>
        <?php
            echo "Hi azad!!" ;
        ?>
    </p>
    <h4>
        <?php 
            print "What are you doing now";
        ?>
    </h4>
    <p>
        <?php
            echo "this is fun";
        ?>

    </p>

</body>

</html>