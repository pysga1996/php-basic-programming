<?php
	session_start();
// Get the product data
	echo $_POST['name'];
	$name = $_POST['name'];

// Validate inputs
	if (empty($name)) {
		$error = "Invalid category data. Check all fields and try again.";
		include('error.php');
	} else {
		// If valid, add the product to the database
		require_once('database.php');
		$query = "INSERT INTO categories (categoryName)
              VALUES ('$name')";
		$db->exec($query);
		unset($_POST['name']);

		// Display the Category List page
//    include('category_list.php');
		$_SESSION['message'] = 'Category added successfully';
		header('Location: category_list.php');
	}