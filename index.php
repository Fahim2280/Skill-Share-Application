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
    $files = file("./Model/Course.txt");

    foreach ($files as $line) {
        $course_filed = explode('|', $line);
        $course_title = $course_filed[1];
        $course_description = $course_filed[2];
        $instructor_name = $course_filed[6];
        $price = $course_filed[4];
        $Duration = $course_filed[3];
        $Reting = $course_filed[9];

        $courses[] = array(
            "title" => $course_title,
            "description" => $course_description,
            "instructor" => $instructor_name,
            "price" => $price
        );
    }


    if (isset($_SESSION['email'])) {
        // Loop through the courses array using a foreach loop
        foreach ($courses as $index => $course) {
    ?>
            <div class="course-card">
                <div class="course-image-container">
                    <img class="course-image" src="course-image.jpg" alt="Course Image">
                </div>
                <div class="course-details">
                    <h2 class="course-title" name="title"><?php echo $course_title; ?></h2>
                    <p class="course-description"><?php echo $course_description; ?></p>
                    <p class="course-instructor">Instructor: <?php echo $instructor_name; ?></p>
                    <p class="course-duration">Duration: <?php echo $Duration; ?></p>
                    <p class="course-rating">Rating: <?php echo $Reting; ?></p>
                    <p class="course-price">Price: <?php echo $price; ?></p>
                    <form action="./Controller/enroll.php" method="post">
                        <input type="hidden" name="course" value="<?php echo $course_title; ?>">
                        <input type="hidden" name="instructor_name" value="<?php echo $instructor_name; ?>">
                        <input type="hidden" name="username" value="<?php echo $_SESSION['email']; ?>">
                        <button type="submit" name="enroll" class="enroll-button">Enroll Now</button>
                </div>
            </div>
    <?php
        }
    } else {
        echo "<p>Please login to view courses.</p>";
    } ?>

    <div>
        <?php
        include './View/footer.php';
        ?>
    </div>

</body>

</html>