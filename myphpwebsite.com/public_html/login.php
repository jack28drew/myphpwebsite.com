<!DOCTYPE html>
<html>
<head>
    <title>My first PHP website</title>
</head>
<body>
    <h2>Login Page</h2>
    <a href="index.php">Click here to go back</a>
    <br/>
    <br/>
    <form action="checklogin.php" method="POST">
        Enter username: <input type="text" name="username" required="required" /> <br/>
        Enter password: <input type="password" name="password" required="required" /> <br/>
                        <input type="submit" value="login" />
    </form>
</body>
</html>

sudo mysqld_safe —skip-grant-tables —skip-networking &