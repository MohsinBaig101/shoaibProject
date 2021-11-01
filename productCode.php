<?php
include_once('./config.php');
$servername = $config["servername"];
$username = $config["username"];
$password = $config["password"];
$dbname = $config["dbname"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products where id=".htmlspecialchars($_GET["p_id"]);

$result = $conn->query($sql);
$data = $result->fetch_assoc();

session_start();
// session_destroy();
if(isset($_GET['add'])){
if(!isset($_SESSION["product_id"])){
    $_SESSION["product_id"][] = $_GET['p_id'];
    $_SESSION["'".$_GET['p_id']."'"] = $_GET['price'];
}elseif(!in_array($_GET['p_id'],$_SESSION["product_id"])){
    $_SESSION["product_id"][] = $_GET['p_id'];
    $_SESSION["'".$_GET['p_id']."'"] = $_GET['price'];
  }
}
?>