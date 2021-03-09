<?php

$frameworks  = array("CakePhp", "Symfony", "ZendFramework", "CodeIgniter", "Laravel");

// Es fehlen in Aufgabe 24 die key-value pairs..von daher hier frei ergänzt.
$books = array("Uncle Bob Martin" => "Clean Code", "Ivar Jacobson et al." => "The Essentials of Modern Software Engineering", "Martin Fowler & Ken Beck" => "Refactoring – Improving the Design of Existing Code");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Aufgabe 22</h1>

    <ol>
        <?php foreach ($frameworks as $value) {
            echo '<li>' . $value . '</li>';
        } ?>
    </ol>

    <h2>Aufgabe 25</h2>

    <ul>
        <?php foreach ($books as $key => $value) {
            echo '<li><strong>' . $key . ': ' . '</strong>' . $value . '</li>';
        } ?>

    </ul>


</body>

</html>