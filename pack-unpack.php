<?php

echo "<h3>Pack</h3>";

echo pack("C3",80,72,80);

echo "<br><br>";

echo pack("A4", 71898);

echo "<br><br>";

echo pack("a5", "media park");

echo "<br><br>";

echo pack("a10", "media park");

echo "<br><br>";

echo "-------------------------";

echo "<h3>UnPack</h3>";

echo "<br><br>";

$binary_data = pack("i3", 56, 439, 54);
var_dump(unpack("i3", $binary_data));

echo "<br><br>";

$data = "PHP";
print_r(unpack("C*",$data));


echo "<br><br>";

$data = "Media Park";
print_r(unpack("s*int ",$data));
echo "<br><br>";
print_r(unpack("H*int ",$data));
echo "<br><br>";
print_r(unpack("h*int ",$data));
