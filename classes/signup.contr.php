<?php
    class SignupController extends Signup {

        private $uid;
        private $email;
        private $pwd;
        private $cpwd;

        public function __construct($uid, $email, $pwd, $cpwd) {
            
            $this->uid = $uid;
            $this->email = $email;
            $this->pwd = $pwd;
            $this->cpwd = $cpwd;

        }

        public function signupUser() {

            session_start();

            if($this->emptyInput() == false) {
                header("Location: ../signup.php");
                $_SESSION['error'] = "Fields are empty.";
                exit();
            }

            if($this->invalidUsername() == false) {
                header("Location: ../signup.php");
                $_SESSION['error'] = "Your username is invalid.";
                exit();
            }

            if($this->invalidEmail() == false) {
                header("Location: ../signup.php");
                $_SESSION['error'] = "Your email is invalid.";
                exit();
            }

            if($this->passwordMatch() == false) {
                header("Location: ../signup.php");
                $_SESSION['error'] = "Your password did not match.";
                exit();
            }
            
            if($this->userTakenCheck() == false) {
                header("Location: ../signup.php");
                $_SESSION['error'] = "Username or Email already taken.";
                exit();
            }

            $_SESSION['success'] = "Account creation successful.";
            $this->setUser($this->uid, $this->email, $this->pwd, $this->cpwd);
        }

        private function emptyInput() {

            if (empty($this->uid) || empty($this->email) || empty($this->pwd) || empty($this->cpwd)) {

                $result = false;

            } else {

                $result = true;

            }

            return $result;

        }

        private function invalidUsername() {

            if(!preg_match("/^[a-zA-Z0-9_]*$/", $this->uid)) {

                $result = false;

            } else {

                $result = true;

            }

            return $result;   

        }

        private function invalidEmail() {

            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {

                $result = false;

            } else {

                $result = true;

            }

            return $result;
        }

        private function passwordMatch() {

            if($this->pwd !== $this->cpwd) {

                $result = false;

            } else {

                $result = true;

            }
            
            return $result;

        }

        private function userTakenCheck() {

            if(!$this->checkUser($this->uid, $this->email)) {

                $result = false;

            } else {

                $result = true;

            }

            return $result;
        }

    }
?>