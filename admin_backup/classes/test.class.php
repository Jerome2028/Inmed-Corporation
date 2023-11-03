<?php 

class Test extends db_mysql{
    
    public function getUsers(){
        $sql="SELECT * FROM ic-user";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()){
            echo $row['user_name'] . '<br>';
 
        }
    } 

public function getUsersStmt ($user_name, $user_password) {
    $sql = "SELECT * FROM ic-user WHERE user_name = ? and user_password = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$user_name, $user_password]);
    $names = $stmt->fetchAll();

    foreach($names as $user){
      echo $user['user_name'] . '<br>';
    }
}
}
?>