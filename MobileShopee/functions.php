<?php

 //require MySQL Connection 
 require('database/DBController.php');

 //required product class
 require('database/Product.php');

 //required cart class
 require('database/cart.php');

 //DBController Object creation
$db = new DBController();

//Product Object
$product = new Product($db);   //this giving object created to other object creation is called dependancy injection
$product_shuffle= $product->getData();

//cart object
$Cart = new Cart($db);

