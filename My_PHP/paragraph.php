<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="paragraph.php" method="post">
        <label>Input your Paragraph:</label>
        <textarea name="para" rows="10" cols="60" placeholder="Type paragraph..."></textarea></br>
        <label>Input your word for search:</label>
        <input type="text" name="word"></input></br>
        <input type="submit" value="Submit"/></br>
    </form>
</body>
</html>

<?php
    $paragraph = $_POST['para'];
    $word = $_POST['word'];
    $count = substr_count($paragraph, $word);
    echo "The word '$word' is found $count times.";
?>
