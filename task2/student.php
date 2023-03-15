<?php
// Create an associative array of employees
$student = array(
    array(
        "name" => "John",
        "dob" => "30-01-2000",
        "subject" => "Mathematics",
        "teacher" => "John",
        "mark" => "50",
    ),
    array(
        "name" => "Max",
        "dob" => "25-02-2000",
        "subject" => "Mathematics",
        "teacher" => "John",
        "mark" => "40",
    ),
    array(
        "name" => "Kim",
        "dob" => "09-02-2000",
        "subject" => "Mathematics",
        "teacher" => "John",
        "mark" => "46",
    ),
    array(
        "name" => "Den",
        "dob" => "11-05-2000",
        "subject" => "Mathematics",
        "teacher" => "John",
        "mark" => "48",
    )
);

// Encode the array as a JSON string
$json_student = json_encode($student);

// Set the response content type to JSON
header('Content-Type: application/json');

// Output the JSON data
echo $json_student;
?>