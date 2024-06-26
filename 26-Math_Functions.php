<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="26-Math Functions.php" method="post">
        <label>X</label>
        <input type="text" name="X">
        <input type="submit">
    </form>
</body>
</html>



<?php

    $value = $_POST["X"];

    echo "$value";
    
?>