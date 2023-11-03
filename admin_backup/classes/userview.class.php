<?php
class UsersView extends Users {
    public function showUser($user_name, $user_password) {
        $results = $this->getUser($user_name, $user_password);
        echo "FullName :" . $results['0']['user_name'] . " " .  $results['0']['user_password'] . "<br>";
    }
}
