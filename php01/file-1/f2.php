<?php

$filename = "C:/xampp/htdocs/PHP & Laravel(Ostad)/Pre Recorded Work/Module-6_PHP-Object-Oriented-Step-05/php01/file-1/data/f1.txt";
// $fp = fopen( $filename, 'r' );
// $line = fgets($fp);
// echo $line;
// fclose( $fp );

$data = file($filename);
print_r($data);
echo "\n";

# আমরা চাইলে পুরো file কে একসাথে read করে নিতে পারি।
# এভাবে read করলে সে file এর প্রতিটা লাইন কে আলাদা আলাদা index এ নিয়ে দেখাবে।




#..............................
# আমরা যদি file এর ৩ নং index এর data দেখতে চাই, তাহলে -

$data = file($filename);
echo $data[3];
echo "\n";



#-----------------------------------------------------------------
# আমরা এভাবে চাইলেও পুরো file কে একসাথে read করে নিতে পারি -

$data = file_get_contents($filename);
echo $data;
echo "\n";

