<?php

echo "<i>Hash Functions md5(), sha1(), hash() Start</i><br><br>";

echo "<h3>Hash()</h3>";

echo hash('ripemd128', 'something', false);

echo "<br><br>";

echo hash('gost', 'something', false);

echo "<br><br>";

echo "<h3>Sha1()</h3>";

echo sha1("media park",false);

echo "<br><br>";

echo sha1("islamabad",false);

echo "<h3>MD5()</h3>";

echo md5('media park',false);

echo "<br><br>";

echo md5('islamabad',false);

echo "<br><br><i>Hash Functions md5(), sha1(), hash() End</i>";