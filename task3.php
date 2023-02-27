<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>
<body>
<?php

include 'index.php';
include 'classPerson.php';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $person = new Person();

    $person->setName( $name );
    $person->setEmail( $email );

    echo '<h2>Name: ' . $person->getName() . '</h2>';
    echo '<h2>Email: ' . $person->getEmail() . '</h2>';
}

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label for="name">Name:</label>
	<input type="text" name="name" id="name"><br>
    <label for="email">Email:</label>
	<input type="email" name="email" id="email"><br>
	<input type="submit" value="Submit"><br>
</form>
</body>
</html>
