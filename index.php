<!DOCTYPE html>
<html>

<head>
    <title>Skill Share| Home</title>
    <link rel="stylesheet" type="text/css" href="./View/card.css">
</head>

<body>
    <div>
        <?php
        include './View/header.php';
        ?>
    </div>
    <?php
    session_start();

    // Read course information from the text file
    $file = fopen("./Model/Course.txt", "r") or die("Unable to open file!");
    while (!feof($file)) {
        $line = fgets($file);
        $course_filed = explode('|', $line);
        $course_id = $course_filed[0];
        $course_title = $course_filed[1];
        $course_description = $course_filed[2];
        $duration = $course_filed[3];
        $price = $course_filed[4];
        $level = $course_filed[5];
        $instructor_name = $course_filed[6];
        $image1 = $course_filed[7];
        $image2 = $course_filed[8];
        $rating = $course_filed[9];
        $status = $course_filed[10];

        $courses[] = array(
            "id" => $course_id,
            "title" => $course_title,
            "description" => $course_description,
            "duration" => $duration,
            "price" => $price,
            "level" => $level,
            "instructor" => $instructor_name,
            "image1" => $image1,
            "image2" => $image2,
            "rating" => $rating,
            "status" => $status
        );
    }
    fclose($file);

    if (isset($_SESSION['email'])) {
        // Loop through the courses array using a foreach loop
        foreach ($courses as $index => $course) {
    ?>
            <div class="course-card">
                <div class="course-image-container">
                    <img class="course-image" src="course-image.jpg" alt="Course Image">
                </div>
                <div class="course-details">
                    <h2 class="course-title" name="title"><?php echo $course['title']; ?></h2>
                    <p class="course-description"><?php echo $course['description']; ?></p>
                    <p class="course-instructor">Instructor: <?php echo $course['instructor']; ?></p>
                    <p class="course-duration">Duration: <?php echo $course['duration']; ?></p>
                    <p class="course-rating">Rating: <?php echo $course['rating']; ?></p>
                    <p class="course-price">Price: <?php echo $course['price']; ?></p>
                    <form action="./Controller/enroll.php" method="post">
                        <input type="hidden" name="course" value="<?php echo $course['title']; ?>">
                        <input type="hidden" name="instructor_name" value="<?php echo $course['instructor']; ?>">
                        <input type="hidden" name="username" value="<?php echo $_SESSION['email']; ?>">
                        <button type="submit" name="enroll" class="enroll-button">Enroll Now</button>
                    </form>
                </div>
            </div>
    <?php
        }
    } else {
        echo "<p>Please login to view courses.</p>";
    }
    ?>
    <div>
        <?php
        include './View/footer.php';
        ?>
    </div>
</body>

</html>