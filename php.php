<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="POST" action="">
        X: <input type="text" name="x" placeholder="X">
        +
        Y: <input type="number" name="y" placeholder="Y">
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];
        $y = $_POST["y"];
        $sum = $x + $y;
        echo "the sum for this value is $x + $y = $sum";
    }
    ?>
</body>
</html>