<?php


    class chatList extends Dbh {

        public function getChatList($myUser, $chatUser) {

            $sql = "SELECT * FROM chats WHERE chat_from = ?  OR chat_to = ?  ORDER BY chat_id DESC LIMIT 1;";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$myUser, $chatUser]);

            while ($result = $stmt->fetchAll()) {
                return $result;
            }

        }
    }