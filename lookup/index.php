<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">


        <?php
        include($_SERVER['DOCUMENT_ROOT'] . '/lookup/php/config.php');
        ?>
            <header>Login</header>
            <form action="process_login.php" method="post">
                <div class="field imput">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field imput">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                <div class="field">

                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>

                <div class="links">
                    Don't have Account? <a href="register.php">Create Account</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>