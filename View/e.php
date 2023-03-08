<!DOCTYPE html>
<html>

<head>
    <title>View e</title>
</head>

<body>
    <form action="../Controller/enroll.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <label for="student_id">Student ID</label>
        <input type="text" name="student_id" id="student_id" required>
        <label for="course">Course</label>
        <input type="text" name="course" id="course" required>
        <input type="submit" value="Enroll">
    </form>
</body>