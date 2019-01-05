<?php
// Enter cookies - very simple insecure cookie setup
setcookie('username', $_POST['username']);
// Here ! we are asking if the array is NOT empty
$submitted = !empty($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookstore</title>
</head>
<body>
    <!-- The cookie is also implemented here -->
    <p>You are <?php echo $_COOKIE['username']; ?></p>
    <p>>Are you looking for a book? <?php echo (int) $lookingForBook; ?></p>
    <p>The book you are looking fo is</p>
    <ul>
        <li><b>Title</b>: <?php echo $_GET['title']; ?></li>
        <li><b>Author</b>: <?php echo $_GET['author']; ?></li>
    </ul>
</body>
</html>