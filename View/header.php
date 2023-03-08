<!DOCTYPE html>
<html>

<head>
    <title>Skill-Share</title>
</head>

<body>
    <div class="logo-container">
        <a href="index.html"><img src="logo.png" alt="Skill-Share Logo"></a>
    </div>
    <div>
        <ul>
            <li><a href="#">Browse Courses</a></li>
            <li><a href="#">My Courses</a></li>
            <li><a href="#">Become an Instructor</a></li>
            <li><a href="#">Sign In</a></li>
            <li class="button"><a href="#">Sign Up</a></li>
        </ul>
    </div>
    <div>
        <form action="../Controller/Search.php" method="POST">
            <label for="search">Search</label>
            <input type="text" name="search" id="search">
            <input type="submit" name="submit" value="Sign Up">
        </form>
    </div>
</body>

</html>