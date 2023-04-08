<?php

$filename = "C:\\xampp\\htdocs\\PHP & Laravel(Ostad)\\Pre Recorded Work\\Module-6_PHP-Object-Oriented-Step-05\\php06\\file\\data\\f1.txt";

$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age'   => 12,
        'class' => 7,
        'roll'  => 11,
    ),
    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age'   => 11,
        'class' => 7,
        'roll'  => 13,
    ),
    array(
        'fname' => 'Minhaj',
        'lname' => 'Ahmed',
        'age'   => 12,
        'class' => 7,
        'roll'  => 14,
    ),
);


# ----------------------------------------------------
# এভাবে ডাটা লিখতে পারি -
$fp = fopen( $filename, 'w' );
foreach ( $students as $student ) {
    $data = sprintf( "%s, %s, %s, %s, %s \n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll'] );
    fwrite($fp, $data);
}
fclose($fp);


#....................................
# csv - comma separeted value

/* $fp = fopen( $filename, 'w' );
foreach ( $students as $student ) {
    // $data = sprintf( "%s, %s, %s, %s, %s \n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll'] );
    // fwrite($fp, $data);
    fputcsv($fp, $student);
}
fclose($fp); */



# ----------------------------------------------------
# এভাবে ডাটা পড়তে পারি -
/* $fp = fopen($filename, 'r');
while($data = fgets($fp)){
    $student = explode(",", $data);
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
}
fclose($fp); */


#....................................
# csv - comma separeted value

/* $fp = fopen($filename, 'r');
while($student = fgetcsv($fp)){
    // $student = explode(",", $data);
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
}
fclose($fp); */






#--------------------------------------------------------
# নতুন ডাটা add করব -
/* $student = array(
    'fname' => 'kamal',
    'lname' => 'Ahmed',
    'age'   => 13,
    'class' => 7,
    'roll'  => 17,
);


// $fp = fopen($filename, 'a');
// $data = sprintf("%s,%s,%s,%s,%s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
//     fwrite($fp, $data);
// fclose($fp);


$fp = fopen($filename, 'a');
fputcsv($fp, $student);
fclose($fp); */






#--------------------------------------------------------
# আগের ডাটা থেকে একটা array remove করব -
$data = file($filename);
print_r($data); // data কি অবস্থানে আছে তা দেখতে পারি
unset($data[0]);

$fp = fopen($filename, 'w');
foreach($data as $line){
    fwrite($fp, $line);
}
fclose($fp);

