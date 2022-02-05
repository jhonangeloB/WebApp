<?php 

    if (!isset($_SESSION['session_uid'])) { 

		// redirect user
		header("location: login.php");

	} else {

        // redirect user
		header("location: home.php");

    }

?>