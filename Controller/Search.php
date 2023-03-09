<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .course-info {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .course-info p {
            flex: 1;
            padding: 10px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
        }

        .course-info p:first-child {
            flex-basis: 100%;
            background-color: #ddd;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    $search_query = $_POST['search'];
    $file_path = '../Model/Course.txt';
    $file = fopen($file_path, 'r');

    if ($file) {
        while (($line = fgets($file)) !== false) {
            if (strpos($line, $search_query) !== false) {
                $data = explode('|', $line);
                echo '<p>ID: ' . htmlspecialchars($data[0]) . '</p>';
                echo '<p>Course Name: ' . htmlspecialchars($data[1]) . '</p>';
                echo '<p>Course Code: ' . htmlspecialchars($data[2]) . '</p>';
                echo '<p>Duration: ' . htmlspecialchars($data[3]) . '</p>';
                echo '<p>Fee: ' . htmlspecialchars($data[4]) . '</p>';
                echo '<p>Level: ' . htmlspecialchars($data[5]) . '</p>';
                echo '<p>Teacher: ' . htmlspecialchars($data[6]) . '</p>';
                echo '<p>Images: ' . htmlspecialchars($data[7]) . ', ' . htmlspecialchars($data[8]) . '</p>';
                echo '<p>Rating: ' . htmlspecialchars($data[9]) . '</p>';
                echo '<p>Status: ' . htmlspecialchars($data[10]) . '</p>';
                break;
            }
        }
        fclose($file);
    } else {
        echo 'Unable to open file.';
    }
    ?>
</body>

</html>