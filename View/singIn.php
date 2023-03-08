<!DOCTYPE html>
<html>
<style>
    .error {
        color: #FF0000;
    }
</style>

<head>
    <title>Skill Share|Sign Up</title>
</head>

<body>
    <form method="POST" action="../Controller/CSingIn.php">
        <table>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value=""></td>
                <td><span class="error">* </span></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" value=""></td>
                <td><span class="error">* </span></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

</body>

</html>