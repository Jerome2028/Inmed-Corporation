<?php
class Userscontroller extends Users {
    public function showUsers ($user_name, $user_password) {
        $results = $this->getUser($user_name, $user_password);
        echo "FullName :" . $results['0']['user_name'] . " " .  $results['0']['user_password'] . "<br>";
    }

}