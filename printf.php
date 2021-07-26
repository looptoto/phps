<?php /*
FileName: printf.php
Date: 2021-07-16
Author: root
Description: 
*/ 
$num = 12.8;
printf("number is: %s", $num);

echo "<br />";
//convert to float 2 digits

printf("number_f is: %.2f",$num);
echo "<br />";
// binary number

printf("number_b is: %b",$num);
echo "<br />";
//print % simnnle
printf("numberis : %%%s",$num);

 ?>
