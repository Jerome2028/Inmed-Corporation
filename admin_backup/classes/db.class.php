<?php
    class db_mysql
    {  
        private $host = "localhost";
        private $username = "root";  
        private $password = ""; 
        private $db = "ic_db";

         protected function connect(){
            $dsn = 'mysql:host=' . $this-> $host . ';db='  .$this->  $db;
            $pdo = new PDO($dsn,$this-> $username, $this-> $password);
            $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
         }
    } 