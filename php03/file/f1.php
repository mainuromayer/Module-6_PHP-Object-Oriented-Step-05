<?php
# windows এ যদি কোন ফাইল এর path সেট করার সময় অবশ্যই scape sequence করে দিতে হবে, না হয় ডাটা পেতে সমস্যা হয়।

$filename = "C:\\xampp\\htdocs\\PHP & Laravel(Ostad)\\Pre Recorded Work\\Module-6_PHP-Object-Oriented-Step-05\\php03\\file\\data\\f1.txt";

// echo getcwd();



# ফাইল এ কখনো কাজ করার সময় ফাইল চেক করে নিতে হবে - file read, write এর উপযুক্ত কিনা।
#-------------------------------------------
if ( is_readable( $filename ) ) {
    $fp = fopen( $filename, 'w' );
    
    fwrite( $fp, "Mercury\n" );
    fwrite( $fp, "Venus\n" );
    fwrite( $fp, "Earth\n" );
    
    fclose( $fp );
} else {
    echo "This file is not readable";
}




#-------------------------------------------
if ( is_writable( $filename ) ) {
    $fp = fopen( $filename, 'w' );

    fwrite( $fp, "Mercury\n" );
    fwrite( $fp, "Venus\n" );
    fwrite( $fp, "Earth\n" );

    fclose( $fp );
} else {
    echo "This file is not writable";
}
