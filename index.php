<?php 

    session_start();
    include_once "assets/header.php";
?>

<body>
    <div class="wrapper">
        <div class="form">
            <div class="index-header">
                <h2>Welcome</h2>
            </div>
            <div class="contents">
                
            </div>
            <div class="controls">
                <div class="button">
                    <form action="login.php">
                        <input type="submit" class="loginbtn" value="Login">
                    </form>
                </div>
                <div class="button">
                    <form action="signup.php">
                        <input type="submit" class="signupbtn" value="Register">
                    </form>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>