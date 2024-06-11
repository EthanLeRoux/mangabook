<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/nav.css">
    <link rel="stylesheet" href="styles/body.css">
    <title>Add Manga</title>
</head>

<body>
    <?php
                include('navigation.php');
    ?>

    <form action="index.php" method="post">

        <label for="title">Title</label>
            <input type="text" name="title" required>
        <br><br>
            <label for="author">Author</label>
            <input type="text" name="author" required>
        <br><br>
            <label for="synopsis">Synopsis</label>
            <input type="text" name="synopsis" required>
        <br><br>
            <label for="genre">Genre</label>
            <input type="text" name="genre" required>
        <br><br>
            <label for="cover">Cover</label>
            <input type="text" name="cover">
        <br><br>
        <input type="submit" name="submit" id="submit">
        </form>

</body>
</html>