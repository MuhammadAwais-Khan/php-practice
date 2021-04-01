<?php

echo "<i>Encoding and decoding Start</i><br><br>";
echo $string = 'String : "Encoding and Decoding Encrypted PHP Code"';

echo "<h3>str_rot13 encode/decode</h3>";
echo str_rot13($string); //Rapbqvat naq Qrpbqvat Rapelcgrq CUC Pbqr
echo "<br>";
echo str_rot13(str_rot13($string)); //Encoding and Decoding Encrypted PHP Code

echo "<h3>base64_encode/base64_decode</h3>";
echo base64_encode($string); //RW5jb2RpbmcgYW5kIERlY29kaW5nIEVuY3J5cHRlZCBQSFAgQ29kZQ==
echo "<br>";
echo base64_decode(base64_encode($string)); //Encoding and Decoding Encrypted PHP Code

echo "<h3>gzinflate/gzdeflate</h3>";

echo gzdeflate($string); //s�K�O��KWH�KQpI�r\�*JRS<��SR
echo "<br>";
echo gzinflate(gzdeflate($string)); //Encoding and Decoding Encrypted PHP Code

echo "<br><br><i>Encoding and decoding End</i>";