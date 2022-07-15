<?php
require_once "classes/Customer.php";
require_once "classes/Product.php";

$customer1 = new Customer("Fernando", "Silvera");
$product1 = new Product("Pappa", 999);

var_dump($customer1);
var_dump($product1);
?>