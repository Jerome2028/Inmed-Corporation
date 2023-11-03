<?php

class ModelSearch extends db_conn_mysql {

    public function __construct() {
        $this->conn = $this->db_conn();
    }

    public function getAllProducts() {
        $query = $this->conn->prepare("SELECT name FROM oc_product_description");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

    public function getAllManuals() {
        $query = $this->conn->prepare("SELECT name FROM oc_ic_manuals");
        $query->execute();
        $response = $query->fetchAll();

        return $response;
    }

}