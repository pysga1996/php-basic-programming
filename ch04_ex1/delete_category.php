<?php
session_start();
// Get IDs
$category_id = $_POST['category_id'];

// Delete the product from the database
require_once('database.php');
$query = "DELETE FROM categories
          WHERE categoryID = '$category_id'";
$db->exec($query);
$_SESSION['message'] = 'Remove category successfully.';
// display the Product List page
header('Location: category_list.php');