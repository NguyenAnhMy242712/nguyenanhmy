<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My First PHP Page</h1>
    <p>
        <?php
        $x=5;
        $y=12;

        $z=$x+$y;
        echo "The sum of x and y is: <br>".$z;
        $sub = $x - $y;

        echo "<br>The difference of x and y is: <br>" . $sub;
        $mul = $x * $y;
        echo "<br>The product of x and y is: <br>" . $mul;

        $div = $y != 0 ? $x / $y : "Undefined (division by zero)";
        echo "<br>The division of x by y is: <br>" . $div;

        $mod = $y != 0 ? $x % $y : "Undefined (modulus by zero)";
        echo "<br>The modulus of x by y is: <br>" . $mod;

        // --- So sánh ---
        echo "<h3>So sánh:</h3>";

        $z = ($x == $y);
        echo "x == y : " . ($z ? "true" : "false") . "<br>";

        $z = ($x != $y);
        echo "x != y : " . ($z ? "true" : "false") . "<br>";

        $z = ($x < $y);
        echo "x < y : " . ($z ? "true" : "false") . "<br>";

        $z = ($x > $y);
        echo "x > y : " . ($z ? "true" : "false") . "<br>";

        $z = ($x <= $y);
        echo "x <= y : " . ($z ? "true" : "false") . "<br>";

        $z = ($x >= $y);
        echo "x >= y : " . ($z ? "true" : "false") . "<br>";
        ?>
</body>
</html>