<?php 

    session_start();

    include_once "assets/header.php";
?>

<body>
    <div class="wrapper">
        <div class="form">
            <div class="header">
                <label>Login</label>
            </div>
            <div class="content">
                
                <?php 
                    include ("includes/systemMessage.php");
                ?>

                <form action="includes/login.inc.php" method="post">                  
                    <div class="input-field">
                        <label>Username or Email</label>
                        <input type="text" name="uid" placeholder="Enter Username or Email">
                    </div>
                    <div class="input-field">
                        <label>Password</label>
                        <input type="password" name="pwd" id="pwd" placeholder="Enter Password">
                        <i class="fa fa-eye-slash" id="showPwd"></i>
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
    <script src="js/show-password.js"></script>
</body>
</html>