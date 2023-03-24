<?php

# (File) Opening files in different modes -

$filename = "C:\\xampp\\htdocs\\PHP & Laravel(Ostad)\\Pre Recorded Work\\Module-6_PHP-Object-Oriented-Step-05\\php04\\file\\data\\f1.txt";

/** 
 * r+
 * r+ এ সে read mode এ ও খুলছে, + দেওয়াতে সে write mode এ ও খুলছে, এমনকি সে আগের ডাটা গুলো ও রেখে দিচ্ছে।
 */

// $fp = fopen($filename, 'r+');

// $line = fgets($fp);
// echo $line;

// fwrite($fp, "Uranus\n");
// fputs($fp, "Neptune\n");
// # fwrite = fputs [alias = same work]

// $line = fgets($fp);
// echo $line;

// fseek($fp, 0); // rewind($fp); 
// # same work

// fclose($fp);




/**
 * step 1 : প্রথমে file এ
 *       Mercury
 *       Venus
 *       Earth 
 *               থাকবে।
 
 * step 2 : file টা open করবে।
 
 * step 3 : তারপরে সে প্রথম লাইন Mercury প্রিন্ট করবে। Mercury প্রিন্ট করার পরে cursor টা সেখানেই থেকে যাবে।
 *         Mercury
 *        ।
 
 * step 4 : cursor এর পরে যাই থাকুক না কেন, সে আগের cursor এর পরে লেখা গুলো override করে fwrite() ফাংশন এর লেখা গুলো প্রিন্ট করে ফেলবে।
 *           Mercury
 *          ।Uranus
 *          Neptune
 *         ।
 
 * step 5 : এরপরে যখন cursor টা শেষে গিয়ে থামবে, তখন সে কোন কিছুই দেখতে পাবে না, তাই সে আর কিছুই print করবে না।
 */

 
 
 
 
 #---------------------------------------------------------------------
/** 
 * w+
 * w+ এ সে write mode এ ও খুলছে, এখানে সে আগের ডাটা গুলো রিমোভ করে নতুন ডাটা include করছে। তাছাড়া কার্সরটাকে লাস্ট এ রেখে দিচ্ছে।
 */

// $fp = fopen($filename, 'w+');

// fwrite($fp, "Uranus\n");
// fwrite($fp, "Neptune\n");

// rewind($fp);

// $line = fgets($fp);
// echo $line;



// fclose($fp);

# এখানে আমরা লেখা গুলো পড়তে পারছিনা, কারন w+ এ কার্সর লেখার শেষে চলে গেছে।
# rewind() কল করে আমরা কার্সরকে আবার সামনে নিয়ে গেছি।

 
 
 
 
 #---------------------------------------------------------------------
/** 
 * a+
 * a+ এ সে read mode এ খুলছে, write mode এ ও খুলছে, তাছাড়া আগের ডাটা সংরক্ষণ করে রাখছে এবং কার্সর টাকে লাস্ট এ রাখছে।
 */

$fp = fopen($filename, 'a+');

fwrite($fp, "Uranus\n");
fwrite($fp, "Neptune\n");

// rewind($fp);
fseek($fp, 0);
# append mode এ কার্সর কে আগে নেওয়ার কোন উপায় নেই, তাকে যতবার রান করব সে ততবার শেষেই নতুন ডাটা add করবে।

fwrite($fp, "Uranus\n");
fwrite($fp, "Neptune\n");

$line = fgets($fp);
echo $line;



fclose($fp);