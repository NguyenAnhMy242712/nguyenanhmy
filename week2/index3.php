<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My First PHP Page</h1>
    <?php 
        $name = " Miss Amalia";
        $age = 20;
        $courses= array("HTML", "CSS", "JavaScript", "PHP");
        echo "Name: " . $name . ", Age: " . $age . 
            "<br>3rd Course: " . $courses[2];
        ?>
</body>
</html>