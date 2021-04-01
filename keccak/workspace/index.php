<?php
declare(strict_types=1);

require("../vendor/autoload.php");
use MyApp\Keccak256;

echo $keccak = 'hash: '.Keccak256::hash('', 256);

echo "<br><br>";

echo $keccak = 'hash: '.Keccak256::hash('media', 256);

echo "<br><br>";

echo $keccak = 'hash: '.Keccak256::hash('park', 256);

echo "<br><br>";

echo $keccak = 'shake: '.Keccak256::shake('media park', 256, 512);

