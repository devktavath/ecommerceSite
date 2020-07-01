<?php
ob_start();
//include header.php file
include('header.php');
?>

<?php
//include banner-area.php
include('Template/_banner-area.php');

//include top-sale
include('Template/_top-sale.php');

//include special-price
include('Template/_special-price.php');

//include banner ads php file
include('Template/_banner-ads.php');

//include new-phones.php file
include('Template/_new-phones.php');

//include blogs.php
include('Template/_blogs.php');

?>

<?php
//include footer.php file
include('footer.php');

?>