<?php

 //require MySQL Connection 
 require('../database/DBController.php');

 //required product class
 require('../database/Product.php');//absolute path

 //DBController object
 $db = new DBController();

//Product Object
$product = new Product($db);   //this giving object created to other object creation is called dependancy injection


if(isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}

