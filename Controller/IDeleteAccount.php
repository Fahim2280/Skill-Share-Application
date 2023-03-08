<?php

$Uname = $_REQUEST['username'];

if ($Uname == null) {
    echo "<h1 align= center> PLEASE FILL ALL THE FIELDS <h1/>";
} else {
    $i = 0;
    $array = array();

    $read = fopen("../Model/Instructor.txt", "r") or die("can't open the file");
    while (!feof($read)) {

        $array[$i] = fgets($read);
        ++$i;
    }
    fclose($read);

    $write = fopen("../Model/Instructor.txt", "w") or die("can't open the file");
    $d = 0;
    foreach ($array as $a) {
        if ($d != $Uname) fwrite($write, $a);

        $d++;
    }
    fclose($write);
    echo "<h1 align= center> DELET SUCCESSFULLY <h1/>";
}

?>