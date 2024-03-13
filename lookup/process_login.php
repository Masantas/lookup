<?php
// Use $_SERVER['DOCUMENT_ROOT'] to specify the absolute path to config.php
include($_SERVER['DOCUMENT_ROOT'] . '/lookup/php/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($password, $user['password'])) {
            // Set up a session and redirect to the home page or user dashboard
            session_start();
            $_SESSION['username'] = $user['username'];
            header("Location: home.php");
            exit();
        } else {
            // Invalid username or password
            echo "Invalid username or password!";
        }
    } else {
        // Handle query error
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
