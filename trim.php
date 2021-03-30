<?php

echo "<i>trim function Start</i><br><br>";

$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"d!");

echo "<br><br>";

$str = "  media park ";
echo $str . "<br>";
// removes all leading and trailing whitespaces
echo trim($str);

echo "<br><br><i>trim function End</i>";