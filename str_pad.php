<?php
echo "<i>str_pad function Start</i><br>";
echo "<br>";
echo $str="hello";

echo "<br><br>";

echo str_pad($str, 11, ":-)", STR_PAD_BOTH);
echo "<br><br>";
echo str_pad($str, 11, " World", STR_PAD_RIGHT);
echo "<br><br>";
echo str_pad($str, 9, ":-) ", STR_PAD_LEFT);

echo "<br><br><i>str_pad function End</i>";
