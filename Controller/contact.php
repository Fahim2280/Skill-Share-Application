

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Create a new file or append to an existing file
    $file = fopen("../Model/contacts.txt", "a");

    // Write the form data to the file
    fwrite($file, "Name: " . $name . "\n");
    fwrite($file, "Email: " . $email . "\n");
    fwrite($file, "Subject: " . $subject . "\n");
    fwrite($file, "Message: " . $message . "\n\n");

    // Close the file
    fclose($file);

    // Redirect the user to a thank you page
    header("Location: ../index.php");
    exit();
}
