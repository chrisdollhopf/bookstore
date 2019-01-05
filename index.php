<?php
// Assign a Boolean value to the variable $looking.
// If either title or author exists true/false.
$looking = isset($_GET['title']) || isset($_GET['author']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookstore</title>
</head>
<body>
    <!-- (int) Casts the above boolean to an integer (1 = true) or (0 = false) -->
    <!-- When printing something with echo PHP want to transform everything it gets into strings aka (type juggling) -->
    <p>You lookin'? <?php echo (int) $looking; ?></p>
    <!-- Boolean false is an empty string, which is not useful for our application. Casting assures we see a value -->
    <p>The book you are looking for is</p>
    <ul>
        <li><b>Title</b>: <?php echo $_GET['title']; ?></li>
        <li><b>Author</b>: <?php echo $_GET['author']; ?></li>
    </ul>
</body>
</html>