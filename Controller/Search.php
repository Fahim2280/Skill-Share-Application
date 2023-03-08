<?php
$search_query = $_POST['search'];
$file_path = '../Model/course.txt';
$file = fopen($file_path, 'r');

if ($file) {
    while (($line = fgets($file)) !== false) {
        if (strpos($line, $search_query) !== false) {
            echo '<p>' . htmlspecialchars($line) . '</p>'; // Display the line
        }
    }
    fclose($file);
} else {
    echo 'Unable to open file.';
}
