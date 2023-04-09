<?php
# Creating Sessions and Working with Session Data

//session_start();
//$_SESSION['name']='Hellen';   # session এর মধ্যে আমরা name set করতে পারি
//echo $_SESSION['name'];
//session_destroy();

$_SESSION['counter'] = $_SESSION['counter'] ?? 0;   # null coalescing operator (??)
$_SESSION['counter']++;
echo $_SESSION['counter'];

/*
    null coalescing operator (??)
  - PHP 7 এ, একটি নতুন feature, null coalescing operator (??) চালু করা হয়েছে।
  - এটি isset() ফাংশনের সাথে একত্রে ternary operation replacement করতে use হয়।
  - null coalescing operator (??) তার first operand provide করে যদি এটি বিদ্যমান থাকে
    এবং NULL না হয়; অন্যথায় এটি তার second operand return দেয়।
*/


# ---------------------------------------------------
# session-2 এর ডাটা কিভাবে দেখব -

//session_name('myapp');  # এটা session-2 file এর session
session_start();
echo $_SESSION['name'];


# note : session-2 এ যদি নাম না সেট করা থাকত তাহলে, এই file এ না দিলেও হবে

