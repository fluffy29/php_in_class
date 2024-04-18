<?php
print_r($_GET);
echo $_GET["x"];
echo '<br>';
print_r($_GET);
echo $_GET["y"];
?>
<html lang="en">
<style>
    body {
        text-align: center
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <form action="php.php">
        <label for="xx">x:</label>
        <input type="number" id="xx" name="x">
        <label for="yy">+ y:</label>
        <input type="number" id="yy" name="y"><br>
        <br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>