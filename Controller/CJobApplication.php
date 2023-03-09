<?php /*
session_start();

// Check if user is logged in
if (!isset($_SESSION["email"])) {
    header("Location: ../View/singIn.php");
    exit();
}

$user_email = $_SESSION["email"];

// Check if a file was uploaded
if (isset($_FILES["cv"])) {
    $cv = $_FILES["cv"];

    // Check if the file is a PDF or DOC/DOCX file
    $allowed_extensions = array("pdf", "doc", "docx");
    $file_extension = strtolower(pathinfo($cv["name"], PATHINFO_EXTENSION));
    if (in_array($file_extension, $allowed_extensions)) {

        // Generate a unique file name and move the file to the "uploads" directory
        $filename = uniqid() . "." . $file_extension;
        $filepath = "uploads/" . $filename;
        move_uploaded_file($cv["tmp_name"], $filepath);

        // Write the file location and user email to a text file
        $data = $filepath . "\t" . $user_email . "\n";
        file_put_contents("../Model/applications.txt", $data, FILE_APPEND);

        // Redirect to a success page
        header("Location: ../View/application_success.php");
        exit();
    } else {
        // Redirect to an error page if the file is not a PDF or DOC/DOCX file
        header("Location: application_error.php?error=invalid_file_type");
        exit();
    }
} else {
    // Redirect to an error page if a file was not uploaded
    header("Location: application_error.php?error=no_file_uploaded");
    exit();
}*/
?>

<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["email"])) {
    header("Location: signIn.php");
    exit();
}

$user_email = $_SESSION["email"];

// Check if a file was uploaded
if (isset($_FILES["cv"])) {
    $cv = $_FILES["cv"];

    // Check if the file is a PDF or DOC/DOCX file
    $allowed_extensions = array("pdf", "doc", "docx");
    $file_extension = strtolower(pathinfo($cv["name"], PATHINFO_EXTENSION));
    if (in_array($file_extension, $allowed_extensions)) {

        // Generate a unique file name and move the file to the "uploads" directory
        $filename = uniqid() . "." . $file_extension;
        $filepath = "../Image/" . $filename;
        move_uploaded_file($cv["tmp_name"], $filepath);

        // Write the file location and user email to a text file
        $data = $filepath . "\t" . $user_email . "\n";
        file_put_contents("../Model/applications.txt", $data, FILE_APPEND);

        // Redirect to a success page
        header("Location: ../View/application_success.php");
        exit();
    } else {
        // Redirect to an error page if the file is not a PDF or DOC/DOCX file
        header("Location: application_error.php?error=invalid_file_type");
        exit();
    }
} else {
    // Redirect to an error page if a file was not uploaded
    header("Location: application_error.php?error=no_file_uploaded");
    exit();
}
