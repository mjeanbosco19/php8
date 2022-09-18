<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variable</title>
</head>

<body>
    <!--
         1. start with $
         2. can't start with number (0-9), special character (-,*#!%+/&\),
         3. can start with underscore (_)
         4. this can't be variable name 
     -->
    <p>Variable assigned by value</p>
    <hr>
    <?php
    $x = 1;
    $y = $x;
    $x = 3;
    echo $y;

    ?>

    <p>Variable assigned by reference</p>
    <hr>
    <?php
    $x = 1;
    $y = &$x;
    $x = 3;
    echo $y;
    ?>

    <p>Using single quote</p>
    <hr>
    <?php
    $firstName = 'Jean';
    echo 'Hello $firstName';
    ?>
    <p>Using single quote with concatination</p>
    <hr>
    <?php
    $firstName = 'Jean';
    echo 'Hello ' . $firstName;
    ?>

    <p>Using double quotes</p>
    <hr>
    <?php
    $firstName = 'Jean';
    echo "Hello $firstName";
    ?>
    <p>Using double quotes with curl bracket</p>
    <hr>
    <?php
    $firstName = 'Jean';
    echo "Hello {$firstName}";
    ?>
    <br>
    <p>Variable Variable</p>
    <hr>
    <?php
    $foo = 'bar';
    $$foo = 'baz';
    echo "$foo, $bar ";
    ?>
    <br>
    <?php
    $foo = 'bar';
    $$foo = 'baz';
    echo "$foo, {$$foo} "
    ?>

</body>

</html>