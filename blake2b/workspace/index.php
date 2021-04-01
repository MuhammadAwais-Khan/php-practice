<?php

require("../vendor/autoload.php");
use MyApp\Blake2b;

$blake2b = new Blake2b();
echo $hash = $blake2b->hash( 'Hello, world!' );
if( $hash !== hex2bin( 'b5da441cfe72ae042ef4d2b17742907f675de4da57462d4c3609c2e2ed755970' ) )
    exit( 1 );