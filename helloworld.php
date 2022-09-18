<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World!</title>
</head>

<body>
    <p>Print using <b>echo</b></p>
    <hr>
    <?php
    echo '<h1>Hello World!</h1>';
    ?>

    <br>
    <p>Print using <b>print</b></p>
    <hr>
    <?php
    print '<h1>Hello World!</h1>';
    ?>

    <br>
    <p>Print using <b>print</b> and <b>echo</b></p>
    <hr>
    <?php
    echo print '<h1>Hello World!</h1>';
    ?>

    <br>
    <p>Print using short code </p>
    <hr>
    <?= '<h1>Hello World!</h1>' ?>


    <br>
    <p>when we have <b>'</b> in a code use <b>\</b> backslash or <b>" "</b></p>
    <hr>
    <?php
    //when we have ' in a code use \ backslash or " " 
    echo '<h1>Jean \'s code</h1>';
    ?>

    <br>
    <p>Print using strings </p>
    <hr>
    <h1>
        <?php
        echo 'Hello' . ' ' . 'world';
        ?>
    </h1>

    <br>
    <p>Print using <b>bracket</b> </p>
    <hr>
    <h1>
        <?php
        echo ('Hello world')
        ?>
    </h1>

</body>

</html>