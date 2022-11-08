<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>multiplication</title>
    </head>
    <body>
        <form action="process.php" method="POST">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php }?>

            <label for="num1">Num1</label>
            <input id="num1" type="text" name="num1" placeholder="num1"><br>

            <label for="num2">Num2</label>
            <input id="num2" type="text" name="num2" placeholder="num2"><br>

            <label for="num3">Num3</label>
            <input id="num3" type="text" name="num3" placeholder="num3"><br>


            <button type="submit">Calculate</button>
        </form>

    </body>
</html>