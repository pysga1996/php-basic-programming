<?php
	session_start();
// Get IDs
	$product_id = $_POST['product_id'];
	$category_id = $_POST['category_id'];

// Delete the product from the database
	require_once('database.php');
	$query = "DELETE FROM products
          WHERE productID = '$product_id'";
	$db->exec($query);
	$_SESSION['message'] = 'Product removed successfully.';
// display the Product List page
	header('Location: index.php');
