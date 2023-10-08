<?php


//declarar vairables en php
$nombre = "Juan";
$txt = "Hello world";
echo "<br>";
$x = 5;
$y = 10.5;
echo "<br>";
echo $txt . "<br>"; //concatenacion de variables
echo "<br>";
echo $x + $y . "<br>"; //operaciones aritmeticas
echo "<br>";
echo $x - $y . "<br>";
echo "<br>";
echo $x * $y . "<br>";
echo "<br>";
echo "I love $txt";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./public/css/main.css">
    <title>Document</title>
</head>
<body>
    <h2><?php echo "Hola " . $nombre . "<br>" ?></h2>
</body>
</html>