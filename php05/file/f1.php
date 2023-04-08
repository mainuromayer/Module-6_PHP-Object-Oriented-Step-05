<?php

$filename = "C:\\xampp\\htdocs\\PHP & Laravel(Ostad)\\Pre Recorded Work\\Module-6_PHP-Object-Oriented-Step-05\\php05\\file\\data\\f1.txt";

# file এ লেখার জন্য আরেকটা ফাংশন আছে, সেটা হচ্ছে file_put_contents()

// file_put_contents($filename, "Mars");
// file_put_contents($filename, "Jupiter");
# এভাবে লেখলে সে সবার শেষে যে ডাটা রান করবে শুধু সেটা পাবে, আগের ডাটা গুলো রিমোভ করে দিবে।



#----------------------------------------------------
// file_put_contents($filename, "Mars\n", FILE_APPEND);
// file_put_contents($filename, "Jupiter\n", FILE_APPEND);
# এভাবে লেখলে তার আগের ডাটা ও থাকবে এবং নতুন ডাটা ও add করবে।



#----------------------------------------------------
# আমরা চাইলে file lock করে রাখতে পারি -
// file_put_contents($filename, "Mars\n", FILE_APPEND | LOCK_EX);
// file_put_contents($filename, "Jupiter\n", FILE_APPEND | LOCK_EX);
# গ্রুপ আকারে কাজ করলে এটা দরকার হবে, আমি যখন একি ফাইলে ডাটা add করব, বাইরের কেউ এটাতে আর ডাটা add করতে পারবে না। Lock ছাড়া পর্যন্ত অপেক্ষা করবে।

# | = pipe sine


#----------------------------------------------------

$fp = file_put_contents($filename, "Jupiter\n", FILE_APPEND | LOCK_EX);
flock($fp, LOCK_EX); // লেখার ক্ষেত্রে
flock($fp, LOCK_SH); // পড়ার ক্ষেত্রে
flock($fp, LOCK_UN); // unlock