<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Login Page With PHP</title>
</head>
<body>
    <form action="login.php" method="post">
    <h2>Login Page</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
    <label>Username</label>
    <input type="text" name="user" placeholder="USER">
    <br> <br>
    <label>Password</label>
    <input type="text" name="password" placeholder="PASSWORD">
    <br>
    <br>
    <button type="sumbit">Login</button>
    </form>
</body>
</html>