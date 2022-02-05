<?php 

    session_start();

?>
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
                <label>Login</label>
            </div>
            <div class="content">
                
                <?php 
                    if (isset($_SESSION["error"])) {    ?>                            
                        <div class="error-field">
                            <span> 
                                <?php echo $_SESSION["error"];  ?>
                            </span>
                        </div>
                    <?php 
                        unset($_SESSION["error"]);
                    }
                ?>

                <?php 
                    if (isset($_SESSION["success"])) {    ?>                            
                        <div class="success-field">
                            <span> 
                                <?php echo $_SESSION["success"];  ?>
                            </span>
                        </div>
                    <?php 
                        unset($_SESSION["success"]);
                    }
                ?>

                <form action="includes/login.inc.php" method="post">                  
                    <div class="input-field">
                        <label>Username or Email</label>
                        <input type="text" name="uid" placeholder="Enter Username or Email" required>
                    </div>
                    <div class="input-field">
                        <label>Password</label>
                        <input type="password" name="pwd" placeholder="Enter Password" required>
                    </div>
                    <div class="input-field">
                        <input type="submit" name="login" class="submit" value="Continue">
                    </div>
                    <div class="link">
                        Don't have an account? <a href="signup.php">Register here.</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>