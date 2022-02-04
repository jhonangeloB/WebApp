<?php

    //Grabbing the data
    if (isset($_POST["login"])){

        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];

    }

    //Instantiate LoginController class
    include "../classes/dbh.class.php";
    include "../classes/login.class.php";
    include "../classes/login.contr.php";

    //Create new LoginController

    //Redirect
    header("Location: ../home.php")


?>