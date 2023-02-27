<?php

include 'classPerson.php';

$person1 = new Person();
$person1->setName( 'Nadim Mahmud' );
$person1->setEmail( 'nadeemmaahmud@gmail.com' );
echo $person1->getProperties() . "<br>";