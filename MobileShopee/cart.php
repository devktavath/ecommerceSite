<?php
ob_start();
//include header.php file
include('header.php');
?>

<?php

//include _cart.php
include('Template/_cart-template.php');

//include _new-phones.php ( all _ files are partial file in the Template folder)
include('Template/_new-phones.php');

?>

<?php
//include footer.php file
include('footer.php');

?>