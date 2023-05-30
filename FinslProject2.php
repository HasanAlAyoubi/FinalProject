<?php
include '[FinalProject.php';
header("Content-Type: application/json; charset=UTF-8");
$dbHelper = new DbHelper();
$dbHelper->createDbConnection();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"]
    $dbHelper->insertNewUser($name,$email,$password);

}
?>