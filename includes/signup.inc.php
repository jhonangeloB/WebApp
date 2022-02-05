<?php

    if (isset($_POST["register"])) {

        //Grabbing the data
        $uid = $_POST["uid"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $cpwd = $_POST["cpwd"];

        //Instantiate SignupController class
        include "../classes/dbh.class.php";
        include "../classes/signup.class.php";
        include "../classes/signup.contr.php";

        //Create new Controller
        $signup = new SignupController($uid, $email, $pwd, $cpwd);

        //Running Error Handler
        $signup->signupUser();

        //Redirect
        header("Location: ../login.php?error=none");

    }

?>