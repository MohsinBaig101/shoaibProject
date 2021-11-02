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
// if(isset($_GET['add'])){
// if(!isset($_SESSION["product_id"])){
//     $_SESSION["product_id"][] = $_GET['p_id'];
//     $_SESSION["'".$_GET['p_id']."'"] = $_GET['price'];
// }elseif(!in_array($_GET['p_id'],$_SESSION["product_id"])){
//     $_SESSION["product_id"][] = $_GET['p_id'];
//     $_SESSION["'".$_GET['p_id']."'"] = $_GET['price'];
//   }
// }

function chekFromItem($items,$p_id,$variant)
{
    $check = false;
    $index=-1;
    foreach($items as $x=>$item)
    {
        if($item['product_id'] == $p_id && $item['variant'] == $variant) 
        {
            $check = true;
            $index=$x;

        }
        if($check == true)
        {break;}
    }
    return [
        'check' => $check,
        'index'=>$index
    ];
}

if(isset($_GET['add'])){

if(isset($_SESSION["products"]) && count($_SESSION["products"]) > 0){

    $is_exist = chekFromItem($_SESSION['products'],$_GET['p_id'],$_GET['variant']);
    if($is_exist['check'] === true){
        $_SESSION["products"][$is_exist['index']]['quantity'] = (int)$_SESSION["products"][$is_exist['index']]['quantity'] + 1;
        $_SESSION["products"][$is_exist['index']]['price'] = (int)$_SESSION["products"][$is_exist['index']]['price'] * $_SESSION["products"][$is_exist['index']]['quantity'];
    }else{
        $_SESSION["products"][]=['product_id'=>$_GET['p_id'],'name'=>$_GET['name'],'price'=>$_GET['price'],'variant'=>$_GET['variant'],'quantity'=>1];
    }
}else{
    $_SESSION["products"][]=['product_id'=>$_GET['p_id'],'name'=>$_GET['name'],'price'=>$_GET['price'],'variant'=>$_GET['variant'],'quantity'=>1];
    // $_SESSION["products"][]['product_id'] = $_GET['p_id'];
    // $_SESSION["products"][]['name'] = $_GET['name'];
    // $_SESSION["products"][]['price'] = $_GET['price'];
    // $_SESSION["products"][]['variant'] = $_GET['variant'];
    // $_SESSION["products"][]['quantity'] = 1;
  }
}
// print_r($_SESSION);
// session_destroy();
?>