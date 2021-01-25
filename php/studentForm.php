<?php
include './include/connection.php';

$selectCourse = $_POST['selectCourse'];
$studentID = $_POST['studentID'];
$courseID = $_POST['courseID'];
$section = $_POST['section'];
$semester = $_POST['semester'];
$totalCO1 = $_POST['totalCO1'];
$totalCO2 = $_POST['totalCO2'];
$totalCO3 = $_POST['totalCO3'];
$totalCO4 = $_POST['totalCO4'];

$data = "INSERT INTO studentinfo (selectCourse, studentID, courseID, section, semester, totalCO1, totalCO2, totalCO3, totalCO4)
             VALUES ('$selectCourse', '$studentID', '$courseID', '$section', '$semester', '$totalCO1', '$totalCO2', '$totalCO3', '$totalCO4')";

if ($conn->query($data) == TRUE) {
    header("Location: ../student-input.php?success=true");
} else {
    header("Location: ../student-input.php?success=false");
}
