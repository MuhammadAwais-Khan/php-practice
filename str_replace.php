<?php

echo "<i>str_replace function Start</i><br><br>";

// Input string
$str  = "You eat fruits, vegetables, fiber every day.";

// Array containing search string
$searchVal = array("fruits", "vegetables", "fiber");

// Array containing replace string from  search string
$replaceVal = array("pizza", "beer", "ice cream");

// Function to replace string
$res = str_replace($searchVal, $replaceVal, $str);

echo $res;

echo "<br><br><i>str_replace function End</i>";
