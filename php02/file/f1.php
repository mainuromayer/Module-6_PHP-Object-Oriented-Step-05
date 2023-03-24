<?php
#  (File) Writing and Appending Data to Files -

/* 

$filename = "C:/xampp/htdocs/PHP & Laravel(Ostad)/Pre Recorded Work/Module-6_PHP-Object-Oriented-Step-05/php02/file/data/f1.txt";

$fp = fopen($filename, "w");    //write mode
// fwrite($fp, "Mercury\n");
fwrite($fp, "Venus\n");
fwrite($fp, "Earth\n");
fclose($fp);

 */

/**
 * এখানে যদি আমি w মোড এ run করি, তাহলে সে নতুন ভাবে file reset করে run করবে। আগের ডাটা থাকলে সেগুলো মুছে যাবে।
 * 
 */


 
 #-------------------------------------------
 # আমি যদি আগের ডাটার সাথে নতুন ডাটা রাখতে চাই, তাহলে -
/* 
 $filename = "C:/xampp/htdocs/PHP & Laravel(Ostad)/Pre Recorded Work/Module-6_PHP-Object-Oriented-Step-05/php02/file/data/f1.txt";
 $existingData = file_get_contents($filename);  // old data

 $fp = fopen($filename, "w");

 fwrite($fp, $existingData); // old + new data

 fwrite($fp, "Mercury\n");
 fwrite($fp, "Venus\n");
 fwrite($fp, "Earth\n");

 fclose($fp);

  */


#.................

# another way -
# অন্য উপায়ে কিভাবে আগের ডাটা রাখতে পারি -
# আমরা চাইলে append mode এ রাখতে পারি -

$filename = "C:/xampp/htdocs/PHP & Laravel(Ostad)/Pre Recorded Work/Module-6_PHP-Object-Oriented-Step-05/php02/file/data/f1.txt";

$fp = fopen($filename, 'a');

fwrite($fp, "Mercury\n");
fwrite($fp, "Venus\n");
fwrite($fp, "Earth\n");

fclose($fp);
