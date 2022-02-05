<?php

    class Login extends Dbh {
        
        protected function getUser($uid, $pwd) {

            $stmt = $this->connect()->prepare('SELECT user_pwd FROM users WHERE user_uid = ? || user_email = ?;');

            if(!$stmt->execute(array($uid, $uid))) {

                $stmt = null;
                header("location: ../login.php?error=stmtfailed");
                exit();

            }

            if($stmt->rowCount() == 0) {

                $stmt = null;
                header("Location: ../login.php?error=nouser");

                session_start();
                $_SESSION["error"] = "There's no account with that username.";

                exit();

            }

            $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPwd = password_verify($pwd, $pwdHashed[0]["user_pwd"]);

            if ($checkPwd == false) {

                $stmt = null;
                header("Location: ../login.php");

                session_start();
                $_SESSION["error"] = "Wrong password.";
               
                exit();
                
            } else if ($checkPwd == true) {

                $stmt = $this->connect()->prepare('SELECT * FROM users WHERE user_uid = ? || user_email = ? && user_pwd = ?;');

                if (!$stmt->execute(array($uid, $uid, $pwdHashed[0]['user_pwd']))){

                    $stmt = null;
                    header("Location: ../login.php?error=stmtfailed");
                    exit();

                } 

                if ($stmt->rowCount() == 0) {

                    $stmt = null;
                    header("Location: ../login.php");

                    session_start();
                    $_SESSION['error'] = "User not found.";
                    exit();

                }

                $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

                session_start();

                $_SESSION["session_id"] = $user[0]["user_id"];
                $_SESSION["session_uid"] = $user[0]["user_uid"];
                $_SESSION["session_code"] = $user[0]["user_numcode"];

                $stmt = null;

            }

            $stmt = null;

        }

    }


?>