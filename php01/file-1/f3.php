<?php

$filename = "C:/xampp/htdocs/PHP & Laravel(Ostad)/Pre Recorded Work/Module-6_PHP-Object-Oriented-Step-05/php01/file-1/data/f1.txt";

# আমরা চেক করে নিতে পারি, এই file টা readable কিনা -

if(is_readable($filename)){
    $fp = fopen( $filename, 'r' );
    $line = fgets($fp);
    echo $line;
    fclose( $fp );
}else{
    echo "Not Readable";
}