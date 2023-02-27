<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
<?php

include 'index.php';
include 'classPerson.php';

$person1 = new Person();

$person1->setName( 'Nadim Mahmud' );
$person1->setEmail( 'nadeemmaahmud@gmail.com' );

echo $person1->getProperties() . "<br>";

?>
</body>
</html>