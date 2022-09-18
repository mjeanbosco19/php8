<!-- Variable -->
<p>Recall <b>Variable</b></p>
<hr>
<?php
$firstName = 'Jean';
$firstName = 'Bosco';
echo 'Hello, ' . $firstName;
?>
<!-- //Constants -->
<br>
<p>Learn <b>Constants</b></p>
<hr>
<?php
// define('name','value'); with same rules to variable
define('STATUS_PAID', 'PAID');
echo defined('STATUS_PAID'); //To check constant 

echo STATUS_PAID;
?>
<br>
<p>Default constants</p>
<hr>
<?php
echo PHP_VERSION;
?>

<br>