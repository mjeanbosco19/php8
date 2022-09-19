<?php
/* PHP Integers */

/* Here are some rules for integers:

 - An integer must have at least one digit
 - An integer must NOT have a decimal point
 - An integer can be either positive or negative
 - Integers can be specified in three formats:
     decimal (10-based), 
     hexadecimal (16-based - prefixed with 0x) or 
     octal (8-based - prefixed with 0) 
     
*/

/* PHP has the following predefined constants for integers:

 - PHP_INT_MAX - The largest integer supported
 - PHP_INT_MIN - The smallest integer supported
 - PHP_INT_SIZE -  The size of an integer in bytes

*/

/* PHP has the following functions to check if the type of a variable is integer:

 # is_int()
 # is_integer() - alias of is_int()
 # is_long() - alias of is_int()

*/

/* INTEGERS */

$x = 2_000_000;
var_dump($x);

echo "<br>";

// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));

echo "<br>";

echo 'The value of x is ' . $x;
