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

    $login = new LoginController ($uid, $pwd);
    
    //Create new LoginController class
    $login->loginUser();
    
    //Redirect
    header("Location: ../home.php")

?>