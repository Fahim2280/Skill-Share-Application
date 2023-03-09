<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="header.css">
</head>

<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Skill Share</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Courses</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="View/StudentDashboard.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="View/singIn.php">Sing In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="singUp.php">Sing Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Controller/logout.php">Logout</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="post" action="../Controller/Search.php">
                    <input class="form-control mr-sm-2" type="search" name="search">
                    <input type="submit" name="submit" value="Search">
                </form>
            </div>
        </nav>
    </div>
</header>