<?php
require_once "../component/conn.php";
require_once "../model/model.search.php";

$modelSearch = new ModelSearch();
$manualSearch = new ModelSearch();
$mode = $_GET['mode'];

switch($mode) {
    case "products";
        $results = $modelSearch->getAllProducts();
        $new_array = [];
        foreach($results as $val) {
            $new_array[] = utf8_encode($val["name"]);
        }
        echo json_encode($new_array);
        exit;

        case "manuals";
        $results = $manualSearch->getAllManuals();
        $new_array = [];
        foreach($results as $val) {
            $new_array[] = utf8_decode($val["name"]);
        }
        echo json_encode($new_array);
        exit;
}

// echo json_encode($response);

?>