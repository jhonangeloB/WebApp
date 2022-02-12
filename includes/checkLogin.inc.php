<?php 

    if (!isset($_SESSION['session_uid'])) { 

		// redirect user
		header("location: login.php");
	}

?>