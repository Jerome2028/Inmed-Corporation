<?php
class Users extends db_mysql {
    protected function getUser(){
        $sql = "SELECT * FROM ic-user WHERE user_name = ? and user_password = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_name, $user_password]);

        $results = $stmt->fetchAll();
        return $results;

    }

}