<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="form">
            <div class="header">
                <label>Registration</label>
            </div>
            <div class="content">
                <!-- <div class="error-field">
                    <span>Please fill in the blanks</span>
                </div> -->
                <form action="includes/signup.inc.php" method="post">
                    <div class="input-field">
                        <label>Username</label>
                        <input type="text" name="uid" placeholder="Enter Username" required>
                    </div>
                    <div class="input-field">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter Email Address" required>
                    </div>
                    <div class="input-field">
                        <label>Password</label>
                        <input type="password" name="pwd" placeholder="Enter Password" required>
                    </div>
                    <div class="input-field">
                        <label>Repeat Password</label>
                        <input type="password" name="cpwd" placeholder="Confirm Password" required>
                    </div>
                    <div class="input-field">
                        <input type="submit" name="register" class="submit" value="Register">
                    </div>
                    <div class="link">
                        Already have an account? <a href="login.php">Login here.</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>