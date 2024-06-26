<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="rough.php">
        <input type="text" name="text">
        <input type="button" value="button">
    </form>

</body>
</html>

<?php
    $total = $_POST["text"];

    echo $total;

?>