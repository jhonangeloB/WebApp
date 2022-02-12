<?php

    class LoginController extends Login {

        private $uid;
        private $pwd;

        public function __construct($uid, $pwd){

            $this->uid = $uid;
            $this->pwd = $pwd;
        }

        public function loginUser() {

            if($this->emptyInput() == false) {
                header("Location: ../login.php?");

                session_start();
                $_SESSION["error"] = "Input field empty.";
                exit();
            }

            $this->getUser($this->uid, $this->pwd);

        }

        private function emptyInput() {

            if(empty($this->uid) || empty($this->pwd)) {

                $result = false;

            } else {

                $result = true;

            }

            return $result;
        }
        

    }

?>