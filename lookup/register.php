<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Create Account</title>
</head>
<body>

<?php
// Use $_SERVER['DOCUMENT_ROOT'] to specify the absolute path to config.php
include($_SERVER['DOCUMENT_ROOT'] . '/lookup/php/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, age, phone, password) VALUES ('$username', '$email', $age, $phone, '$password')";

    if (mysqli_query($conn, $query)) {
        // Registration successful, you may redirect to a success page or perform other actions.
        echo "Registration successful!";
    } else {
        // Handle registration failure
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>


    <div class="container">
        <div class="box form-box">
        

  

            <header>SignUp</header>
            <form action="" method="post">
                <div class="field imput">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocapitalize="off" required>
                </div>

                <div class="field imput">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocapitalize="off" required>
                </div>

                <div class="field imput">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocapitalize="off" required>
                </div>

                <div class="field imput">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" id="phone" autocapitalize="off" required>
                </div>

                <div class="field imput">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" autocapitalize="off" required>
                </div> 

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="SignUp" required>
                </div>

                <div class="links">
                    Already have an account? <a href="index.php">LogIn</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>