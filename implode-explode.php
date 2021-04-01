<?php
echo "<i>Implode, Explode functions Start</i><br>";

echo "<h3>Implode</h3>";

// PHP Code to implement join function

$InputArray = array('Hello','How','are','you');

// Join without separator
print_r(implode($InputArray));

echo "<br><br>";

// Join with separator
print_r(implode("-",$InputArray));

echo "<br><br>";

echo "-------------------------";

echo "<h3>Explode</h3>";

// original string
$OriginalString = "Hello, How can we help you?";

// Without optional parameter NoOfElements
print_r(explode(" ",$OriginalString));

echo "<br><br>";
// with positive NoOfElements
print_r(explode(" ",$OriginalString,3));

echo "<br><br>";
// with negative NoOfElements
print_r(explode(" ",$OriginalString,-1));

echo "<br><br><i>Implode, Explode functions End</i>";