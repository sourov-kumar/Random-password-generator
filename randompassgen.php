<?php
$big = "ABCDEFGHIJ";
$small = "abcdefghij";
$number = "123456789";
$special = "!#$%^&*";
// shuffle 
$bi = str_shuffle("$big");
$sm = str_shuffle("$small");
$num = str_shuffle("$number");
$sp = str_shuffle("$special");
// substract
$bi2 = substr($bi,0,2);
$sm2 = substr($sm,0,2);
$num2 = substr($num,0,2);
$sp2 = substr($sp,0,2);
echo "The generated password is :",$bi2."".$sm2."".$num2."".$sp2;


?>