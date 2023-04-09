<?php
# আমরা session এর নাম সেট করে কাজ করতে পারি, যাতে আমাদের cookie গুলো সেই নামের against এ রুট হয়ে থাকে

//session_name('myapp');

/*session_start(array(
    'cookie_lifetime'=>60   # cookie কতক্ষন চলবে
));*/
session_start([
    'cookie_lifetime'=>60   # cookie কতক্ষন চলবে
]);
$_SESSION['name']='Ruby';
echo $_SESSION['name'];

/*
 - এখানে ৬০ সেকেন্ড পর্যন্ত এই ডাটা টা save থাকবে,
 - এই ডাটা গুলো আসলে cookie হিসেবে server side এ সেভ থাকছে
*/


