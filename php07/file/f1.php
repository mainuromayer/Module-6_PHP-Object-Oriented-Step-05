<?php

# Processing data using serialized arrays in filesize

$filename = "C:\\xampp\\htdocs\\PHP & Laravel(Ostad)\\Pre Recorded Work\\Module-6_PHP-Object-Oriented-Step-05\\php07\\file\\data\\f1.txt";

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

# আমরা এখানে stractured array টাকে serialized string হিসেবে save করব
$data = serialize($students);
file_put_contents($filename, $data, LOCK_EX);


#--------------------------------------------------
#serialized string হিসেবে যে ডাটা save করেছি, সেটাকে unserialized করে read করব
$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);



#--------------------------------------------------
# serialized string হিসেবে যে ডাটা save সেখান থেকে ডাটা remove করব
unset($allStudents[0]);

$data = serialize($allStudents);
file_put_contents($filename, $data, LOCK_EX);


$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);

/* 
    - প্রথমে serialized ডাটাকে unserialized করব
    - unserialized ডাটা থেকে কোন ডাটা remove করব
    - তারপর সেটাকে serialize করে file_put_contents এর মাধ্যমে csv file এ রেখে দিব
    - যদি সে serialize ডাটা দেখার দরকার হয়, তাহলে unserialize করে print_r এর মাধ্যমে দেখে নিব
*/




#--------------------------------------------------
# serialized string হিসেবে যে ডাটা save সেখানে আরো ডাটা add/push করব
$student = array(
    'fname' => 'Kamal',
    'lname' => 'Ahmed',
    'age' => 13,
    'class' => 7,
    'roll' => 17,
);

$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);

array_push($allStudents, $student);

print_r($allStudents);

$data =  serialize($allStudents);
file_put_contents($filename, $data, LOCK_EX);


/* 
    - প্রথমে serialized ডাটাকে unserialized করব
    - unserialized ডাটাতে ডাটা add করব
    - তারপর সেটাকে serialize করে file_put_contents এর মাধ্যমে csv file এ রেখে দিব
    - যদি সে serialize ডাটা দেখার দরকার হয়, তাহলে unserialize করে print_r এর মাধ্যমে দেখে নিব
*/