<?php
/* PHP Strings */

// Example of string

$firstName = 'Jean';
$lastName = 'Bosco';
$name = $firstName . ' ' . $lastName;

echo $name . '<br>';
//to access specific character
echo '<br>';
echo $name[0] . '<br>'; //output J
echo $name[-2]; //output c

//Heredoc
echo '<br>';
$text = <<<TEXT
Line 1 
Line 1 
Line 1 

TEXT;
echo '<br>';
echo nl2br($text);

//Nowdoc
#similar to Herodoc but can not read variable


// strlen() - Return the Length of a String
echo '<br>';
echo strlen("Jean Bosco Mugiraneza"); //output 21

// str_word_count() - Count Words in a String
echo '<br>';
echo str_word_count("Jean Bosco Mugiraneza"); //output 3

// strrev() - Reverse a String
echo '<br>';
echo strrev("Jean Bosco Mugiraneza");

// strpos() - Search For a Text Within a String
echo '<br>';
echo strpos("Mugiraneza Jean Bosco", "Jean"); //output 11
#Tip: The first character position in a string is 0 (not 1).

// str_replace() - Replace Text Within a String
echo '<br>';
echo str_replace("Jean","Bosco","Mugiraneza Jean"); //output Mugiraneza Bosco
