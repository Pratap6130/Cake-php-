<?php
$str = "NAVJIVAN";
echo $str;
$lenn =strlen($str);
// echo "<br>the lenght of the string is ";
// echo $lenn;
echo "<br>the lenght of string is ". $lenn . "<br> Dhanawad apka <br>";

echo "<br>the NUMBER of WORDS in thisstring is ". str_word_count($str) . "Dhanawad apka <br>";

echo "<br>the reversed string is ". strrev($str) . "<br> Dhanawad apka <br>";

echo "<br>the search for is in this string is ". strpos($str,"is") . "<br> Dhanawad apka <br>";

echo "<br>the replaced string is ". str_replace("is","at", $str) . "<br> Dhanawad apka <br>";

// . is used to concatinate two of strings 


?>