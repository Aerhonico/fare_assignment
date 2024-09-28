<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <p style="background-color: green;color: aliceblue;">Registration successful</p>
    <?php
        if(isset($_GET["error"])){
    ?>
    <p style="background-color: red;color: aliceblue;"><?php echo $_GET["error"]?></p>
    <?php
        }
    ?>
    <form action="output.php" method="POST">
        <div>
            <label for="username">Username</label><br>
            <input type="username" name="username" id="username"><br>
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email"><br>
        </div>

        <div>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br>
        </div>

        <div>
            <label for="confirmpassword">Confirm Password</label><br>
            <input type="password" name="confirmpassword" id="confirmpassword"><br>
        </div>

        <input type="submit" value="Register">
    </form>
</body>
</html>