<?php 

    session_start();

    include_once "assets/header.php";

?>

<body>
    <div class="wrapper">
        <div class="form">
            <div class="header">
                <label>Registration</label>
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
                <form action="includes/signup.inc.php" method="post">
                    <div class="input-field">
                        <label>Username</label>
                        <input type="text" name="uid" placeholder="Enter Username" >
                    </div>
                    <div class="input-field">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter Email Address" >
                    </div>
                    <div class="input-field">
                        <label>Password</label>
                        <input type="password" name="pwd" placeholder="Enter Password" >
                    </div>
                    <div class="input-field">
                        <label>Repeat Password</label>
                        <input type="password" name="cpwd" placeholder="Confirm Password" >
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