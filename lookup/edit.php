<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php"></a>LookUp</p>
        </div>
        <div class="right-links">
            <a href="#">Profile</a>
            <a href="logout.php"> <button class="btn">Log Out</button></a>
        </div>
    </div>
    
    <div class="container">
        <div class="box form-box">
            <header>Edit Profile</header>
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
                    <div class="field">

                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>

                
            </form>
        </div>
    </div>
</body>
</html>