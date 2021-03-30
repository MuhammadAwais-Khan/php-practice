<?php

echo "<i>strtolower function Start</i><br><br>";

echo strtolower("Hello WORLD.");

echo "<br><br>";
// original string
$str = "going BACK he SAW THIS 123$#%";

// string converted to lower case
$resStr = strtolower($str);

print_r($resStr);

echo "<br><br><i>strtolower function End</i>";