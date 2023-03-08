<?php
$courseID = $_REQUEST['courseID'];
$courseName = $_REQUEST['courseName'];
$courseDescription = $_REQUEST['courseDescription'];
$courseDuration = $_REQUEST['courseDuration'];
$coursePrice = $_REQUEST['coursePrice'];
$courseCategory = $_REQUEST['courseCategory'];
$courseInstructor = $_REQUEST['courseInstructor'];
$courseImage = $_REQUEST['courseImage'];
$courseVideo = $_REQUEST['courseVideo'];
$courseRating = $_REQUEST['courseRating'];
$courseStatus = $_REQUEST['courseStatus'];

if($courseID== null ||$courseName == null || $courseDescription == null || $courseDuration == null || $coursePrice == null || $courseCategory == null || $courseInstructor == null || $courseImage == null || $courseVideo == null || $courseRating == null || $courseStatus == null){
    echo "<h1 align= center> PLEASE FILL ALL THE FIELDS <h1/>";

}else{
    $data = $courseID."|". $courseName . "|" . $courseDescription . "|" . $courseDuration . "|" . $coursePrice . "|" . $courseCategory . "|" . $courseInstructor . "|" . $courseImage . "|" . $courseVideo . "|" . $courseRating . "|" . $courseStatus . "\r\n";
    $file = fopen('../Model/Course.txt', 'a');
    fwrite($file, $data);

    echo "<h1 align= center> NEW ADDED SUCCESSFULLY <h1/>";

}
