<?php
$cpurseID = $_REQUEST['courseID'];
$courseName = $_REQUEST['courseName'];
$courseDescription = $_REQUEST['courseDescription'];
$coursePrice = $_REQUEST['coursePrice'];
$courseDuration = $_REQUEST['courseDuration'];
$courseCategory = $_REQUEST['courseCategory'];
$courseInstructor = $_REQUEST['courseInstructor'];
$courseImage = $_REQUEST['courseImage'];
$courseVideo = $_REQUEST['courseVideo'];
$courseRating = $_REQUEST['courseRating'];
$courseStatus = $_REQUEST['courseStatus'];


if ($cpurseID == null || $courseName == null || $courseDescription == null || $coursePrice == null || $courseDuration == null || $courseCategory == null || $courseInstructor == null || $courseImage == null || $courseVideo == null || $courseRating == null || $courseStatus == null) {
    echo "<h1 align= center> PLEASE FILL ALL THE FIELDS <h1/>";
}

$data = $cpurseID . "|" . $courseName . "|" . $courseDescription . "|" . $coursePrice . "|" . $courseDuration . "|" . $courseCategory . "|" . $courseInstructor . "|" . $courseImage . "|" . $courseVideo . "|" . $courseRating . "|" . $courseStatus . "\r\n";

$i = 0;
$array = array();

$read = fopen("../Model/Couse.txt", "r") or die("can't open the file");
while (!feof($read)) {

    $array[$i] = fgets($read);
    ++$i;
}
fclose($read);

$write = fopen("../Model/Course.txt", "w") or die("can't open the file");
$d = 0;
foreach ($array as $a) {
    if ($d == $cpurseID) {

        fwrite($write, $data);
    } else {
        fwrite($write, $a);
    }


    $d++;
}
fclose($write);

echo "<h1 align= center > UPDATE SUCCESSFULLY <h1> <br>";
