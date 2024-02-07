<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error'];?> </p>

        <?php } ?>
        <label>Usuario</label>
        <input type="text" name="uname"placeholder="Usuario"><br>
        <label>Password</label>
        <input type="password" name="password"placeholder="Password"><br>
        <button type="submit">login</button>
    </form>

</body>
</html>