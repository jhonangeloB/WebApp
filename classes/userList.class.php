<?php

    include "dbh.class.php";

    class userList extends Dbh {

        public function getUserList($myUser) {

            $sql = "SELECT * FROM users WHERE NOT user_id = ?;";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$myUser]);

            while ($result = $stmt->fetchAll()) {
                return $result;
            }
        }


        public function getChatList($myUser, $chatUser) {

            $sql = "SELECT * FROM chats WHERE chat_from = ? AND  chat_to = ? OR chat_to = ? AND chat_from = ? ORDER BY chat_id DESC LIMIT 1;";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$myUser, $chatUser, $myUser, $chatUser]);

            while ($result = $stmt->fetchAll()) {
                return $result;
            }

        }
    }


?>