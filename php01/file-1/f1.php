<?php

// (File) Reading data from files -

#-------------------------------------------
# Find path:

/** 1st way -
 * step 1 : Go terminal
 * step 2 : write -> pwd
 * step 3 : Enter
 */

/** 2nd way -
 * echo getcwd();
 */

/** 3rd way -
 * step 1 : Go terminal
 * step 2 : write -> php filename
 * step 3 : Enter
 */
#-------------------------------------------

#-------------------------------------------
// cwd: current working directory (a concept, state, or value)
// pwd : print working directory (a command)
#-------------------------------------------



#-------------------------------------------
/**
 * আমরা কিভাবে একটা file থেকে ডাটা পড়ব -
 
 * Step 1 : প্রথমে আমাদের file টাকে খুলতে হবে, file টাকে খুললে php তখন file টাকে resource টাইপের ভেরিয়েবল হিসেবে সেভ করে রাখবে।
 
 * Step 2 : এরপরে আমরা সেই resource ভেরিয়েবল থেকে একবার একবার করে ডাটা পড়ব, আমরা চাইলে লাইন বাই লাইন ধরে ডাটা পড়তে পারি, অথবা, একসাথে অনেকগুলো ডাটা পড়ে নিতে পারি।
 
 * Step 3 : এরপরে আমরা একটা ভেরিয়েবল নিতে পারি, সেটার নাম দিতে পারি $fp(file pointer)
 
 * Step 4 : ফাইল open এর জন্য এ ফাংশন ব্যবহার করতে পারি, fopen()
 
 * Step 5 : fopen(filepath, mode);
 *       Note :
 *          ১। filepath : একটা ভেরিয়েবল এ রেখে সে ভেরিয়েবল এর নামটা এখানে দিব
 *          ২। mode : r  w  a  x  r+  w+  a+  x+
 *                  r = read
 *                  w = write
 *                  a = append (শেষদিক থেকে যোগ করা)
 
 * Step 6 : একটা লাইন পড়ার জন্য যে ফাংশন ব্যবহার করব, সেটা হচ্ছে fgets()
 
 * Step 7 : ফাইল close এর জন্য এ ফাংশন ব্যবহার করতে পারি, fclose()
 
 
 */
#-------------------------------------------



// echo getcwd();
#-------------------------------------------
$filename = "C:/xampp/htdocs/PHP & Laravel(Ostad)/Pre Recorded Work/Module-6_PHP-Object-Oriented-Step-05/php01/file-1/data/f1.txt";

#...............
$fp = fopen( $filename, 'r' );
$line = fgets($fp);     # যতক্ষন না সে new line পাবে ততক্ষন পর্যন্ত সে পড়ে যাবে, এভাবে ১০২৪ charecter পর্যন্ত পড়বে।
// $line = fgets( $fp, 3 ); # 3 index পর্যন্ত পড়বে
echo $line;


$line = fgets($fp); # এভাবে যতবার সে call করবে, ততবার সে পড়ে যাবে।
echo $line;


$line = fgets($fp); # এভাবে যতবার সে call করবে, ততবার সে পড়ে যাবে।
echo $line;

# Note : এভাবে সে একলাইন একলাইন করে পড়বে,



#...............
# একসাথে সব লাইন পড়তে চাইলে -

// while($line = fgets($fp)){
//     echo $line;
// }


#...............
# আমরা যখন while লুপ চালাই তখন সে প্রতিবার কল করে পরের লাইনে গিয়ে থেমে যায়, 
# while লুপ দুইবার চালাতে চাই, সে কিন্তু একবার রান করবে, কারন  while লুপ চালানো শেষ হলে cursor টা সেখানেই থেমে হয়ে যায়।

// while($line = fgets($fp)){
//     echo $line;
// }
// while($line = fgets($fp)){
//     echo $line;
// }


#...............
# যখন while লুপ চালাবো তখন rewind() function call করব -

// while($line = fgets($fp)){
//     echo $line;
// }

// rewind($fp);

// while($line = fgets($fp)){
//     echo $line;
// }
# Note : এর ফলে সে আগের কার্সর যেখানে থেমে গেছে, সেখান থেকে পুনরায় পরের ফাংশন রান করা শুরু করবে।


#...............
// while($line = fgets($fp)){
//     echo $line;
// }

// rewind($fp);

// while($line = fgets($fp, 5)){
//     echo $line . "-";
// }
# Note : এর ফলে সে আগের কার্সর যেখানে থেমে গেছে, সেখান থেকে পুনরায় পরের ফাংশন রান করা শুরু করবে। কিন্তু প্রতিবার 5 index পর্যন্ত সে রান করবে, new line পেলে সে পরের লাইনে গিয়ে '-' print করে পরের call এ চলে যাবে।



#...............
// while($line = fgets($fp)){
//     echo $line;
// }

// fseek($fp, 8);

// while($line = fgets($fp, 5)){
//     echo $line . "-";
// }
# এই fseek() এ ফাংশন use করে আমরা কার্সর move করাতে পারি।
# এখানে 8 index এর আগের গুলোকে সে দেখাবে না।
# Note : fseek() এ ফাংশন use করা হয়, কত নম্বর পজিশন থেকে সে থেমে যাওয়া কার্সর রান করা শুরু করবে।



#...............
while($line = fgets($fp)){
    echo $line;
}

rewind($fp);
fseek($fp, -1, SEEK_END);

while($line = fgets($fp, 5)){
    echo $line . "-";
}
# এই fseek() এ ফাংশন use করে আমরা কার্সর move করাতে পারি।
# এখানে আমরা শেষ index এ গিয়ে কার্সরটা থামিয়ে দিয়েছি।



#...............


fclose( $fp );