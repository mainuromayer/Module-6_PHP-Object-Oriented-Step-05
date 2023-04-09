<?php

# Processing data in json format to file

$filename = "C:\\xampp\\htdocs\\PHP & Laravel(Ostad)\\Pre Recorded Work\\Module-6_PHP-Object-Oriented-Step-05\\php08\\file\\data\\f1.txt";

$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age' => 12,
        'class' => 7,
        'roll' => 11,
    ),
    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age' => 11,
        'class' => 7,
        'roll' => 13,
    ),
    array(
        'fname' => 'Nikhil',
        'lname' => 'Chandra',
        'age' => 12,
        'class' => 7,
        'roll' => 14,
    ),
);

#----------------------------------------------------------
# আমরা এখানে stractured array টাকে json data হিসেবে save করব
$encodeData =  json_encode($students);
file_put_contents($filename, $encodeData, LOCK_EX);



#----------------------------------------------------------
# json data হিসেবে যে ডাটা save করেছি, সেটাকে read করব

# এটা object হিসেবে return করবে
$data = file_get_contents($filename);
$allStudent = json_decode($data);
print_r($allStudent);

# object access করব যেভাবে -
echo $allStudent[0]->fname;


#.....................................
# এটা array হিসেবে return করবে
$data = file_get_contents($filename);
$allStudent = json_decode($data, true);
print_r($allStudent);

# array access করব যেভাবে -
echo $allStudent[0]['fname'];

