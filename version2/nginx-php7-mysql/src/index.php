<?php

require 'strict.php';

testStrictTypeInteger('3');

echo "<h1>WTF - testStrictTypeInteger() is strictly type hinted to an integer and an Exception have not been RAISED???</h1>";

echo "<h1>Thanks PHP for STRICT TYPE not be STRICT</h1>";

echo "<h1>Now I am wondering why so many Developers hate PHP inconsistencies... I can't really see why!!!";

phpinfo();

