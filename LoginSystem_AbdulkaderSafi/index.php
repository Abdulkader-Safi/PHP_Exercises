<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>login System</title>
    </head>
    <body>
        <form action="login.php" method="POST">
            <h2>Login</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php }?>
            <label for="uname">User Name</label>
            <input id="uname" type="text" name="uname" placeholder="User Name"><br>

            <label for="pass">Password</label>
            <input id="pass" type="password" name="pass" placeholder="********"><br>

            <button type="submit">Login</button>
        </form>

    </body>
</html>