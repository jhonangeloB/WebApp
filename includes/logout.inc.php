<?php

    session_start();
    session_unset();
    session_destroy();

    //Go back to login page
    header("Location: ../index.php");

?>