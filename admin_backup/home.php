<?php 
  require_once 'component/header.php';
  require_once "controller/controller.auth.php";

$auth = new Auth();
$isLoggedIn = $auth->getSession("auth");
$auth->redirect("auth", true, "index.php");
$user = $auth->getSession("name");

$counterVal = 1;
if(isset($_SESSION['hasVisited'])){
    $_SESSION['hasVisited']="yes";
    $counterVal++;

    echo $counterVal;

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1>Welcome<?= $user; ?></h1>
    <a href="logout.php">Logout</a>
  </body>
</html>
