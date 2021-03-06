<?php 
    class Signup extends Dbh {

        protected function setUser($uid, $email, $numcode, $pwd) {
            $stmt = $this->connect()->prepare('INSERT INTO users (user_uid, user_email, user_numcode, user_pwd) VALUES (?, ?, ?, ?);');

            $hashed_password = password_hash($pwd, PASSWORD_BCRYPT);

            $numcode = mt_rand(1000,9999);

            if(!$stmt->execute(array($uid, $email, $numcode, $hashed_password))) {

                $stmt = null;
                header("location: ../index.php?");
                session_start();
                $_SESSION["error"] = "Query failed";
                exit();
            }

            $stmt = null;
        }

        protected function checkUser($uid, $email) {

            $stmt = $this->connect()->prepare('SELECT user_pwd FROM users WHERE user_uid = ? OR user_email = ?;');

            if(!$stmt->execute(array($uid, $email))) {
                
                $stmt = null;
                header("location: ../index.php?");
                session_start();
                $_SESSION["error"] = "Query failed";
                exit();
            }

            if($stmt->rowCount() > 0) {

                $resultCheck = false;

            } else {

                $resultCheck = true;

            }

            return $resultCheck;

        }

    }


?>