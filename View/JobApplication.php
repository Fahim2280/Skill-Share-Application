<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../View/SingIn.php');
} ?>
<!DOCTYPE html>
<html>

<head>
    <title>Submit Job Application</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type=file] {
            margin-bottom: 10px;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type=submit]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <h1>Submit Job Application</h1>
    <form method="post" action="../Controller/CJobApplication.php" enctype="multipart/form-data">
        <label for="cv">Upload your CV (PDF, DOC, DOCX only)</label>
        <input type="file" name="cv" id="cv" accept=".pdf,.doc,.docx" required>
        <input type="submit" value="Submit">
    </form>
</body>

</html>