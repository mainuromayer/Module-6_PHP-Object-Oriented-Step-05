<?php
// echo getcwd();
$filename_1 = "C:/xampp/htdocs/PHP & Laravel(Ostad)/Pre Recorded Work/Module-6_PHP-Object-Oriented-Step-05/php01/file-2/data/f1.txt";
$filename_2 = "C:/xampp/htdocs/PHP & Laravel(Ostad)/Pre Recorded Work/Module-6_PHP-Object-Oriented-Step-05/php01/file-2/data/f2.txt";


#---------------------------------------------------
# f2.txt এই file টা r-- mod এ আছে -
$r = fileperms($filename_2);
echo "read only mod -> decimal number : " . $r;
echo "\n";

$o = decoct($r);
echo "read only mod -> decimal number to conver octal number : " . $o;
echo "\n";

#---------------------------------------------------

#---------------------------------------------------
# f1.txt এই file টা rwx mod এ আছে -
$r = fileperms($filename_1);
echo "mod -> decimal number : " . $r;
echo "\n";

$o = decoct($r);
echo "mod -> decimal number to conver octal number : " . $o;
echo "\n";

echo substr($o, 2);
/**
 * Output :
 * windows server - 0666 [work not properly]
 * linux server - 0644 [work properly]
 */

echo "\n";


#---------------------------------------------------

# এটা মুলত file এর permission change করার জন্য use করা হয়।
echo chmod($filename_1, 0600);




/**
 *  (permission)  (value)
 *    (---)         (0)
 *    (--x)         (1)
 *    (-w-)         (2)
 *    (-wx)         (3)
 *    (r--)         (4)
 *    (r-x)         (5)
 *    (rw-)         (6)
 *    (rwx)         (7)
 */
